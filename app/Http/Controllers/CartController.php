<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->productId);

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'size' => $request->size,
                'category' => $product->category,
                'image' => $product->mainImage->name,
                'color' => $product->colors()->first()->name,
                'material' => $product->materials()->first()->name
            ]
        ]);

        if (auth()->check()) {
          \Cart::erase(auth()->user()->id);
          \Cart::store(auth()->user()->id);
        }
        return response()->json(['status' => 'success']);
    }
}
