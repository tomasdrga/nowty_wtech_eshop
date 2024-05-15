<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Models\ShippingInformation;
use App\Models\PaymentInformation;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Size;

class Checkout extends Component
{
    public $shipping=0.00;
    public $totalWithoutShipping;
    public $total;

    public $discountCode;
    public $discount = 0;
    public $discountMessage = '';

    public function updateShipping($value) { $this->shipping = $value; }

    public function applyDiscount()
     {
        // Placeholder array for valid discount codes and amounts
        $validDiscounts = [
            'CODE10' => 10,
            'CODE20' => 20,
            'CODE30' => 30,
            'CODE40' => 40,
            'CODE50' => 40,
        ];

        if (isset($validDiscounts[$this->discountCode])) {
            $this->discount = $validDiscounts[$this->discountCode];
            \Cart::setGlobalDiscount($this->discount);
            $this->discountMessage = 'Discount applied successfully';
        } else {
            \Cart::setGlobalDiscount(0);
            $this->discountMessage = 'Invalid discount code';
        }
     }

     public function updatedDiscountCode($value)
     {
         if(empty($value)) {
             $this->discountCode = '';
             $this->discountMessage = '';
         } else {
             $this->applyDiscount();
         }
     }

     public function createOrder(Request $request) {
        try {
          $messages = [
              'email.required' => 'Email is required.',
              'email.email' => 'Provide a valid email.',
              'country.required' => 'Country is required.',
              'firstname.required' => 'First name is required.',
              'lastname.required' => 'Last name is required.',
              'address.required' => 'Address is required.',
              'city.required' => 'City is required.',
              'postalcode.required' => 'Postal code is required.',
              'phone.required' => 'Phone number is required.',
              'card_number.required' => 'Card number is required.',
              'card_number.size' => 'Card number must be 16 digits long.',
              'expiration_date.required' => 'Expiration date is required.',
              'expiration_date.date_format' => 'Expiration date must be in format "mm/yy".',
              'security_code.required' => 'Security code is required.',
              'security_code.regex' => 'Security code must be three digits long.',
              'name_on_card.required' => 'Name on card is required.'
          ];
          $validator = Validator::make($request->all(),[
             'email' => 'required|email',
             'country' => 'required|min:4|max:128',
             'firstname' => 'required|min:4|max:128|alpha',
             'lastname' => 'required|min:4|max:128|alpha',
             'address' => 'required|min:5|max:128',
             'city' => 'required|min:2|max:128|alpha',
             'postalcode' => 'required|min:4|max:10|string|regex:/^[0-9]+$/',
             'phone' => 'required|min:10|max:15||string|regex:/^[0-9]+$/',
             'card_number' => 'required|size:16|string|regex:/^[0-9]+$/',
             'expiration_date' => 'required|date_format:"m/y"',
             'security_code' => 'required||string|size:3|regex:/^[0-9]{3}$/',
             'name_on_card' => 'required|min:2|max:256'], $messages);

          if ($validator->fails()) {
            $errors = $validator->errors();
            $message = '';

            foreach ($errors->all() as $error) {
                $message .= $error . "\n";
            }

             toast($message, 'error');
             return redirect('/checkout');
          }

          $requestDetails = $request->all();

          // Check if user is logged in
          if (auth()->check()) {
              $user = auth()->user();
              $information = $user->information;

              $cartItems = \Cart::content();

              foreach ($cartItems as $cartItem) {
                $productId = $cartItem->id;
                $quantityOrdered = $cartItem->qty;

                $size = Size::where('product_id', $productId)
                            ->where('name', $cartItem->options->size)
                            ->first();

                if ($size && $size->quantity < $quantityOrdered) {
                    toast('YOU ORDERED TOO MUCH!!! SAVE YOUR MONEY', 'error');
                    return redirect('/cart');
                }

                if ($size) {
                    $size->quantity -= $quantityOrdered;
                    $size->save();
                }
              }

              // If the user does not have shipping information, create a new shipping information record
              if ($information->shipping_id === null) {
                  $shippingInformation = new ShippingInformation();
              } else {
                  $shippingInformation = $information->shipping_information;
              }

              // Update shipping information
              $shippingInformation->first_name = $requestDetails['firstname'];
              $shippingInformation->last_name = $requestDetails['lastname'];
              $shippingInformation->telephone = $requestDetails['phone'];
              $shippingInformation->address = $requestDetails['address'];
              $shippingInformation->city = $requestDetails['city'];
              $shippingInformation->postal_code = $requestDetails['postalcode'];
              $shippingInformation->country = $requestDetails['country'];
              $shippingInformation->save();

              // If the user does not have shipping information, associate the shipping information with the user's information
              if ($information->shipping_id === null) {
                  $information->shipping_id = $shippingInformation->id;
                  $information->save();
              }

              // If the user does not have shipping information, create a new shipping information record
              if ($information->payment_id === null) {
                  $paymentInformation = new PaymentInformation();
              } else {
                  $paymentInformation = $information->payment_information;
              }

              // Update shipping information
              $paymentInformation->first_name = $requestDetails['firstname'];
              $paymentInformation->last_name = $requestDetails['lastname'];
              $paymentInformation->card_number = bcrypt($requestDetails['card_number']);
              $paymentInformation->expiration_date = bcrypt($requestDetails['expiration_date']);
              $paymentInformation->security_code = bcrypt($requestDetails['security_code']);
              $paymentInformation->save();

              // If the user does not have shipping information, associate the shipping information with the user's information
              if ($information->payment_id === null) {
                  $information->payment_id = $paymentInformation->id;
                  $information->save();
              }

              $orderNumber = 'ORD-' . Str::uuid()->toString();

              $order = new Order();
              $order->order_number = $orderNumber;
              $order->user_id = $user->id;
              $order->shipping_id = $shippingInformation->id;
              $order->payment_id = $paymentInformation->id;
              $order->shipping_price = $requestDetails['shipping'];
              $order->total = (float)str_replace(',', '', \Cart::subtotal()) + (float)$requestDetails['shipping'];
              $order->save();

              $orderId = $order->id;

              foreach ($cartItems as $cartItem) {
                  $orderItem = new OrderItem();
                  $orderItem->size = $cartItem->options->has('size') ? $cartItem->options->size : null;
                  $orderItem->quantity = $cartItem->qty;
                  $orderItem->order_id = $orderId;
                  $orderItem->product_id = $cartItem->id;
                  $orderItem->save();
              }

              \Cart::erase(auth()->user()->id);
              \Cart::destroy();

          } else {
              $cartItems = \Cart::content();

              foreach ($cartItems as $cartItem) {
                $productId = $cartItem->id;
                $quantityOrdered = $cartItem->qty;

                $size = Size::where('product_id', $productId)
                            ->where('name', $cartItem->options->size)
                            ->first();

                if ($size && $size->quantity < $quantityOrdered) {
                    toast('YOU ORDERED TOO MUCH!!! SAVE YOUR MONEY', 'error');
                    return redirect('/cart');
                }

                if ($size) {
                    $size->quantity -= $quantityOrdered;
                    $size->save();
                }
              }

              $shippingInformation = new ShippingInformation();

              // Update shipping information
              $shippingInformation->first_name = $requestDetails['firstname'];
              $shippingInformation->last_name = $requestDetails['lastname'];
              $shippingInformation->telephone = $requestDetails['phone'];
              $shippingInformation->address = $requestDetails['address'];
              $shippingInformation->city = $requestDetails['city'];
              $shippingInformation->postal_code = $requestDetails['postalcode'];
              $shippingInformation->country = $requestDetails['country'];
              $shippingInformation->save();

              $paymentInformation = new PaymentInformation();

              // Update shipping information
              $paymentInformation->first_name = $requestDetails['firstname'];
              $paymentInformation->last_name = $requestDetails['lastname'];
              $paymentInformation->card_number = bcrypt($requestDetails['card_number']);
              $paymentInformation->expiration_date = bcrypt($requestDetails['expiration_date']);
              $paymentInformation->security_code = bcrypt($requestDetails['security_code']);
              $paymentInformation->save();

              $orderNumber = 'ORD-' . Str::uuid()->toString();

              $order = new Order();
              $order->order_number = $orderNumber;
              $order->user_id = null;
              $order->shipping_id = $shippingInformation->id;
              $order->payment_id = $paymentInformation->id;
              $order->shipping_price = $requestDetails['shipping'];
              $order->total =  (float)str_replace(',', '', \Cart::subtotal()) + (float)$requestDetails['shipping'];
              $order->save();

              $orderId = $order->id;

              foreach ($cartItems as $cartItem) {
                  $orderItem = new OrderItem();
                  $orderItem->size = $cartItem->options->has('size') ? $cartItem->options->size : null;
                  $orderItem->quantity = $cartItem->qty;
                  $orderItem->order_id = $orderId;
                  $orderItem->product_id = $cartItem->id;
                  $orderItem->save();
              }

              \Cart::destroy();
          }
          toast('YOUR ORDER WAS CREATED SUCCESSFULLY', 'success');
          return redirect('/products');

        } catch (\Illuminate\Validation\ValidationException $e) {
            toast('SOMETHING WENT WRONG', 'error');
            return redirect('/checkout');
        }
     }

    public function render()
    {
        return view('livewire.checkout');
    }
}
