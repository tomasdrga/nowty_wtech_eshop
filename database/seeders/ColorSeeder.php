<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $products = Product::all()->where('category', 'bottoms');

      $colorsArray = ['black', 'denim', 'wild'];

      $productsColors = ['wild','denim','wild','wild','wild','black','wild','wild','wild','wild'];

      $colors = [];
      foreach ($colorsArray as $colorName) {
        $color = new Color();
        $color->id = Uuid::uuid4();
        $color->name = $colorName;
        $color->save();
        $colors[$colorName] = $color;
      }

      foreach ($products as $index => $product) {
        $colorName = $productsColors[$index % count($productsColors)];
        $color = $colors[$colorName];
        DB::table('product_colors')->insert([
          'id' => Uuid::uuid4(),
          'product_id' => $product->id,
          'color_id' => $color->id
        ]);
      }
    }
}
