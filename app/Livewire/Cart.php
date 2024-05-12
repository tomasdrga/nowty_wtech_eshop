<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class Cart extends Component
{
    public function render()
    {
        return view('livewire.cart');
    }

    public function goToCheckout() {
          $cartItemCount = \Cart::count();

          if ($cartItemCount === 0) {
              toast('NO ITEMS IN YOUR CART. BUY SOMETHING!', 'error');
              return redirect('/cart');
          }

          return redirect('/checkout');
    }

    public function destroyCart() {
        \Cart::destroy();
        if (auth()->check()) {
          \Cart::erase(auth()->user()->id);
        }
    }

    public function increaseQuantity($rowId)
    {
        $item = \Cart::get($rowId);
        \Cart::update($rowId, $item->qty + 1);
        if (auth()->check()) {
          \Cart::erase(auth()->user()->id);
          \Cart::store(auth()->user()->id);
        }
    }

    public function decreaseQuantity($rowId)
    {
        $item = \Cart::get($rowId);
        \Cart::update($rowId, $item->qty - 1);
        if (auth()->check()) {
          \Cart::erase(auth()->user()->id);
          \Cart::store(auth()->user()->id);
        }
    }

    public function deleteCartItem($rowId) {
        \Cart::remove($rowId);
        if (auth()->check()) {
          \Cart::erase(auth()->user()->id);
          \Cart::store(auth()->user()->id);
        }
    }
}
