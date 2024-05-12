<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Product;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

  public function run(): void
  {
    $products = Product::whereIn('category', ['bottoms', 'hoods','accessories','hats','tees'])->get();

    $materialsArray = ['denim', 'cotton', 'leather'];

    $materials = [];
    foreach ($materialsArray as $materialName) {
      $material = new Material();
      $material->id = Uuid::uuid4();
      $material->name = $materialName;
      $material->save();
      $materials[$materialName] = $material;
    }

    foreach ($products as $product) {
      $randomKey = array_rand($materialsArray);
      $materialName = $materialsArray[$randomKey];
      $material = $materials[$materialName];
      DB::table('product_materials')->insert([
        'id' => Uuid::uuid4(),
        'product_id' => $product->id,
        'material_id' => $material->id
      ]);
    }
  }
}
