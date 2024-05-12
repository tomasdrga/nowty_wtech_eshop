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
    $products = Product::whereIn('category', ['bottoms', 'hoods','accessories','hats','tees'])->get();

    $colorsArray = ['black', 'denim', 'wild'];

    $colors = [];
    foreach ($colorsArray as $colorName) {
      $color = new Color();
      $color->id = Uuid::uuid4();
      $color->name = $colorName;
      $color->save();
      $colors[] = $color;
    }

    foreach ($products as $product) {
      $randomColorKey = array_rand($colors);
      $color = $colors[$randomColorKey];
      DB::table('product_colors')->insert([
        'id' => Uuid::uuid4(),
        'product_id' => $product->id,
        'color_id' => $color->id
      ]);
    }
  }
}
