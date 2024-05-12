<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Image;
use App\Models\Material;
use App\Models\Order;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Validation\Rule;
use App\Models\User;

class AdminController extends Controller
{
  public $editableProduct = null;


  // Function to display the admin dashboard
  public function index() {

    // Fetch all users, products and orders
    $users = User::all();
    $products = Product::all();
    $orders = Order::all();

    // Fetch orders by month
    $orders_by_month = DB::table('orders')->select(DB::raw('count(*) as order_count, EXTRACT(MONTH from created_at) as month'))->groupBy('month')->pluck('order_count', 'month');
    $months = ['january_orders', 'february_orders', 'march_orders', 'april_orders', 'may_orders', 'june_orders', 'july_orders', 'august_orders', 'september_orders', 'october_orders', 'november_orders', 'december_orders'];
    $order_counts = array_fill_keys($months, 0);
    foreach ($months as $index => $month) {
      $order_counts[$month] = $orders_by_month[$index + 1] ?? 0;
    }

    // Fetch product count by category
    $categories = ['bottoms', 'hoods', 'tees', 'accessories', 'hats'];
    $sizes = ['xs', 's', 'm', 'l', 'xl'];
    $count_by_category = [];
    foreach($categories as $category) {
      $catProducts = Product::where('category', $category)->get();
      $count_by_category[$category.'Count'] = 0;
      foreach ($catProducts as $product) {
        foreach ($sizes as $size) {
          $count_by_category[$category.'Count'] += $product->sizes()->where('name', $size)->first()->quantity;
        }
      }
    }

    // Fetch total product count
    $productAll = array_sum($count_by_category);

    // Return the admin view with the fetched data
    return view('admin', array_merge(['editableProduct' => $this->editableProduct, 'users' => $users, 'products' => $products, 'orders' => $orders, 'productsAll'=> $productAll ], $order_counts, $count_by_category));
  }

  // Function to display the edit product page
  public function giveProduct($id) {

    // Fetch the product with the given id
    $this-> editableProduct = Product::find($id);

    // For the product, fetch the material, color
    $editableProductMaterial = $this->editableProduct->materials()->first();
    $editableProductColor = $this->editableProduct->colors()->first();
    $editableProductMaterial = $editableProductMaterial ? $editableProductMaterial['name'] : null;
    $editableProductColor = $editableProductColor ? $editableProductColor['name'] : null;

    // For the product, fetch the quantity of each size
    // XS
    $editableProductSizeXS = $this->editableProduct->sizes()->where('name', 'xs')->first();
    $editableProductSizeXS = $editableProductSizeXS ? $editableProductSizeXS->quantity : 0;

    // S
    $editableProductSizeS = $this->editableProduct->sizes()->where('name', 's')->first();
    $editableProductSizeS = $editableProductSizeS ? $editableProductSizeS->quantity : 0;

    // M
    $editableProductSizeM = $this->editableProduct->sizes()->where('name', 'm')->first();
    $editableProductSizeM = $editableProductSizeM ? $editableProductSizeM->quantity : 0;

    // L
    $editableProductSizeL = $this->editableProduct->sizes()->where('name', 'l')->first();
    $editableProductSizeL = $editableProductSizeL ? $editableProductSizeL->quantity : 0;

    // XL
    $editableProductSizeXL = $this->editableProduct->sizes()->where('name', 'xl')->first();
    $editableProductSizeXL = $editableProductSizeXL ? $editableProductSizeXL->quantity : 0;

    // Return the edit product view with the fetched data
    return view('edit_product', ['editableProductSizeXS'=>$editableProductSizeXS,'editableProductSizeS'=>$editableProductSizeS,'editableProductSizeM'=>$editableProductSizeM,'editableProductSizeL'=>$editableProductSizeL,'editableProductSizeXL'=>$editableProductSizeXL,'editableProductColor'=>$editableProductColor,'editableProductMaterial'=>$editableProductMaterial,'editableProduct'=>$this->editableProduct]);
  }

  // Function to delete a user
  public function destroy_user($id)
  {
    $user=User::find($id);
    $user->delete();
    return response()->json(['status' => 'success']);
  }

  // Function to delete a product
  public function destroy_product($id)
  {
    // Find the product
    $product = Product::find($id);

    // Get all images associated with the product
    $images = Image::where('product_id', $id)->get();

    // Iterate over the images and delete from storage
    foreach ($images as $image) {
      // Builds the path to the image and deletes it
      Storage::delete('public/uploads/'.$image->name);
      // Delete the image record
      $image->delete();
    }

    // Delete the product itself
    $product->delete();

    return response()->json(['status' => 'success']);
  }

  // Function to get all users and return the users table view
  public function getUsers() {
    $users = User::all();
    return view('users_table', compact('users'));
  }

  // Function to get all products and return the products table view
  public function getProducts()
  {
    $products = Product::all();
    return view('products_table', compact('products'));
  }

  // Function to update a product information
  public function updateProduct(Request $request, $id) {

    // Validate the request
    try {
      $request->validate([
        'title' => 'required',
        'category' => 'required',
        'description' => 'required',
        'tech_details' => 'required',
        'material'=>'required',
        'color' => 'required',
        'price' => 'required',
        'dropzone' => 'image|mimes:jpeg,png,jpg|max:2048',
        'fileInput1' => 'image|mimes:jpeg,png,jpg|max:2048',
        'fileInput2' => 'image|mimes:jpeg,png,jpg|max:2048',
        'fileInput3' => 'image|mimes:jpeg,png,jpg|max:2048',
        'fileInput4' => 'image|mimes:jpeg,png,jpg|max:2048',
        'fileInput5' => 'image|mimes:jpeg,png,jpg|max:2048',
        'quantity_xs' => 'required',
        'quantity_s' => 'required',
        'quantity_m' => 'required',
        'quantity_l' => 'required',
        'quantity_xl' => 'required',
      ]);
    } catch (\Illuminate\Validation\ValidationException $e) {
      toast('SOMETHING WERE WRONG DURING UPDATING PRODUCT, TRY AGAIN', 'error');
      return redirect('/admin#all-products');
    }

    // Check if the names of the images are unique
    $inputImages = ['fileInput1', 'fileInput2', 'fileInput3', 'fileInput4', 'fileInput5', 'dropzone'];
    $images = Image::all();
    foreach ($images as $image) {
      foreach ($inputImages as $inputImage) {
        if ($request->hasFile($inputImage) && $image->name == $request->file($inputImage)->getClientOriginalName()) {
          toast('THE NAMES OF THE IMAGES MUST BE UNIQUE', 'error');
          return redirect('/admin#all-products');
        }
      }
    }

    // Fetch the product with the given id
    $product = Product::find($id);

    // Update the product information
    $product->name = $request->input('title', $product->name);
    $product->description = $request->input('description', $product->description);
    $product->technical_details = $request->input('tech_details', $product->technical_details);
    $product->category = $request->input('category', $product->category);
    $product->price = $request->input('price', $product->price);
    $product->save();

    // Update the quantity of each size
    $sizes = ['xs', 's', 'm', 'l', 'xl'];
    foreach($sizes as $size){
      $sizeModel = $product->sizes()->where('name', $size)->first();
      $sizeModel->quantity = $request->input('quantity_'.$size, $sizeModel->quantity);
      $sizeModel->save();
    }

    // Update the color and material
    $colorName = $request->input('color');
    $materialName = $request->input('material');
    $color = Color::where('name', $colorName)->first();
    $material = Material::where('name', $materialName)->first();

    // Update the color of the product
    if($color) {
      $productColors = DB::table('product_colors')->where('product_id', $product->id)->first();
      if($productColors){
        DB::table('product_colors')
          ->where('id', $productColors->id)
          ->update(['color_id' => $color->id]);
      }
    }

    // Update the material of the product
    if($material) {
      $productMaterials = DB::table('product_materials')->where('product_id', $product->id)->first();
      if($productMaterials){
        DB::table('product_materials')
          ->where('id', $productMaterials->id)
          ->update(['material_id' => $material->id]);
      }
    }

    // Update the images of the product
    $imageNames = ['fileInput1', 'fileInput2', 'fileInput3', 'fileInput4', 'fileInput5', 'dropzone'];
    $imageTypes = ['index', 'main', 'secondary', 'secondary', 'secondary', 'size_guide'];

    foreach ($imageNames as $index => $imageName) {
      if ($request->hasFile($imageName)) {
        $existingImage = Image::where('name', $imageName)->first();
        if($existingImage){
          $productImage = $product->images()->where('type', $imageTypes[$index])->first();
          if ($productImage) {
            $productImage->name = $imageName; // Set the existing image name
            $productImage->save();
          }
        } else {
          // Get the existing image record for this product of the given type
          $image = $product->images()->where('type', $imageTypes[$index])->first();

          // Delete the old image file from storage
          Storage::delete('public/uploads/'.$image->name);

          // Store new image file
          $file = $request->{$imageName};
          $fileName = $file->getClientOriginalName();
          $file->storeAs('public/uploads', $fileName);

          // Update stored image name in the image record
          $image->name = $fileName;
          $image->save();
        }
      }
    }

    // Delete the images of the product that were selected for deletion
    if ($request->has('checkbox-delete-secondary')) {
      foreach ($request->input('checkbox-delete-secondary') as $id) {
        $productImage = $product->images()->find($id);
        if ($productImage) {
          Storage::delete('public/uploads/'.$productImage->name);
          $productImage->delete();
        }
      }
    }

    toast('PRODUCT UPDATED SUCCESSFULLY', 'success');
    return redirect('/admin#all-products');
  }

  // Function to create a new product
  public function createNewProduct(Request $request) {

    // Validate the request
    try {
      $messages = [
        'title.unique' => 'THE TITLE HAS ALREADY BEEN TAKEN',
      ];
      $validator = Validator::make($request->all(),[
        'title' => ['required',Rule::unique('products', 'name')],
        'category' => 'required',
        'description' => 'required',
        'tech_details' => 'required',
        'material'=>'required',
        'color' => 'required',
        'price' => 'required',
        'dropzone' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'fileInput1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'fileInput2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'fileInput3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'fileInput4' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'fileInput5' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'quantity_xs' => 'required',
        'quantity_s' => 'required',
        'quantity_m' => 'required',
        'quantity_l' => 'required',
        'quantity_xl' => 'required',
      ], $messages);
      if ($validator->fails()) {
        $errors = $validator->errors();

        if ($errors->has('title')) {
          toast($errors->first('title'), 'error');
        } else {
          toast('PLEASE FILL IN ALL FIELDS', 'error');
        }

        return redirect('/admin#create-new-product');
      }

    } catch (\Illuminate\Validation\ValidationException $e) {
      toast('SOMETHING WENT WRONG', 'error');
      return redirect('/admin#create-new-product');
    }

    #check if the names of the images are unique
    $images = Image::all();
    foreach ($images as $image) {
      if ($image->name == $request->file('dropzone')->getClientOriginalName() || $image->name == $request->file('fileInput1')->getClientOriginalName() || $image->name == $request->file('fileInput2')->getClientOriginalName() || $image->name == $request->file('fileInput3')->getClientOriginalName() || $image->name == $request->file('fileInput4')->getClientOriginalName() || $image->name == $request->file('fileInput5')->getClientOriginalName()) {
        toast('THE NAMES OF THE IMAGES MUST BE UNIQUE', 'error');
        return redirect('/admin#create-new-product');
      }
    }
    $imageNames = ['fileInput1', 'fileInput2', 'fileInput3', 'fileInput4', 'fileInput5', 'dropzone'];
    $imageTypes = ['index', 'main', 'secondary', 'secondary', 'secondary', 'size_guide'];

    // Create a new product
    $product = new Product();
    $product->name = $request->title;
    $product->description = $request->description;
    $product->technical_details = $request->tech_details;
    $product->category = $request->category;
    $product->price = $request->price;
    $product->save();

    // Store the quantity of each size
    $sizes = ['xs', 's', 'm', 'l', 'xl'];
    foreach($sizes as $size){
      $newSize = new Size();
      $newSize->name = $size;
      $newSize->quantity = $request->{'quantity_'.$size};
      $newSize->product_id = $product->id;
      $newSize->save();
    }

    // Store the color and material
    $colorName = $request->input('color');
    $materialName = $request->input('material');
    $color = Color::where('name', $colorName)->first();
    $material = Material::where('name', $materialName)->first();

    DB::table('product_materials')->insert([
      'id'=> Uuid::uuid4(),
      'product_id' => $product->id,
      'material_id' => $material->id
    ]);

    DB::table('product_colors')->insert([
      'id'=> Uuid::uuid4(),
      'product_id' => $product->id,
      'color_id' => $color->id
    ]);

    // Store the images
    foreach ($imageNames as $index => $imageName) {
      $file = $request->{$imageName};
      $fileName = $file->getClientOriginalName();
      $file->storeAs('public/uploads', $fileName);

      $image = new Image();
      $image->name = $fileName;
      $image->type = $imageTypes[$index];
      $image->product_id = $product->id;
      $image->save();
    }
    toast('PRODUCT CREATED SUCCESSFULLY', 'success');
    return redirect('/admin#create-new-product');
  }
}
