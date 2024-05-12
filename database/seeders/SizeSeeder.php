<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $products = Product::all()->where('category', 'bottoms');

      // Defining the sizes
      $sizesArray = ['xs', 's', 'm', 'l', 'xl'];

      // Loop through available products
      foreach ($products as $product) {
        // For each product, attach all sizes
        foreach ($sizesArray as $sizeName) {
          $newSize = new Size();
          $newSize->name = $sizeName;
          $newSize->quantity = rand(0, 40);
          $newSize->product_id = $product->id;
          $newSize->save();
        }
      }
    }
}
