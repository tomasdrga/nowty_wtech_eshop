<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->truncate();

        $products = Product::all();

        $imageTypes = ['index', 'main', 'secondary', 'secondary', 'secondary'];
        $imageNames = [['palace_denim_index.png', 'palace_denim_main.png', 'palace_denim_back.png', 'palace_denim_detail_1.png', 'palace_denim_detail_2.png'],
                       ['palace_tree_index.png', 'palace_tree_main.png', 'palace_tree_back.png', 'palace_tree_side.png', 'palace_tree_detail_1.png']];
        $product_number = 0;

        foreach ($products as $product) {
          for ($i = 0; $i < 5; $i++) {
            Image::create([
              'id' => Uuid::uuid4(),
              'name' => $imageNames[$product_number][$i],
              'type' => $imageTypes[$i],
              'product_id' => $product->id,
              'created_at' => now(),
              'updated_at' => now()
            ]);
          }
          $product_number++;
        }
    }
}
