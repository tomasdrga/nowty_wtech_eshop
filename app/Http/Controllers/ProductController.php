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
        $product->technical_details = $this->splitDetails($product->technical_details);
        $product->description = $this->splitDetails($product->description);

        return view('product_detail', compact('product'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::search($request->get('query'))->get();

            $products = $products->map(function ($product) {
                $image = $product->mainImage;
                $product->mainImageName = $image ? $image->name : null;

                return $product;
            });

            return response()->json($products);
        }
    }

    private function splitDetails($details) {
        $details = str_replace(array('\r\n', '\n', '\r', '.'), '|', $details);
            return explode('|', $details);
    }
}
