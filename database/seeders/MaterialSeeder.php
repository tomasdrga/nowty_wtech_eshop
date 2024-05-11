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
    $products = Product::all()->where('category', 'bottoms');

    $materialsArray = ['denim', 'cotton', 'leather'];

    $productsMaterials = ['cotton','denim','cotton','leather','denim','cotton','cotton','cotton','cotton','denim'];

    $materials = [];
    foreach ($materialsArray as $materialName) {
      $material = new Material();
      $material->id = Uuid::uuid4();
      $material->name = $materialName;
      $material->save();
      $materials[$materialName] = $material;
    }

    foreach ($products as $index => $product) {
      $materialName = $productsMaterials[$index % count($productsMaterials)];
      $material = $materials[$materialName];
      DB::table('product_materials')->insert([
        'id' => Uuid::uuid4(),
        'product_id' => $product->id,
        'material_id' => $material->id
      ]);
    }
  }
}
