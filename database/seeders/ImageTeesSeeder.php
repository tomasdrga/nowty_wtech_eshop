<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageTeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all()->where('category', 'tees');

         $imageTypes = ['index', 'main', 'secondary', 'secondary', 'secondary'];
         $imageNames = [['supreme_30_index.png', 'supreme_30_main.png', 'supreme_30_back.png', 'supreme_30_detail.png'],
                        ['chiz_face_index.png', 'chiz_face_main.png', 'chiz_face_hat_back.png']];

         $product_number = 0;
         foreach ($products as $product) {
           for ($i = 0; $i < count($imageNames[$product_number]); $i++) {
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
