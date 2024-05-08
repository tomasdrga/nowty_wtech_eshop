<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    public function index() {
      $products = Product::all();

      return view('index', compact('products'));
    }

    public function loadProducts() {
      $products = Product::all();

      return view('products', compact('products'));
    }

    public function show($slug) {
        $product = Product::with(['images', 'materials', 'sizes', 'colors'])->where('slug', $slug)->firstOrFail();

        return view('product_detail', compact('product'));
    }
}
