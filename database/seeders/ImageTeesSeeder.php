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
         $imageNames = [['tunnel_index.png', 'tunnel_main.png', 'tunnel_back.png'],
                        ['travis_index.png', 'travis_main.png', 'travis_back.png'],
                        ['supreme_tnf_index.png', 'supreme_tnf_main.png', 'supreme_tnf_back.png'],
                        ['supreme_30_index.png', 'supreme_30_main.png', 'supreme_30_back.png', 'supreme_30_detail.png'],
                        ['nice_brown_index.png', 'nice_brown_main.png', 'nice_brown_back.png'],
                        ['melvins_striped_white_index.png', 'melvins_striped_white_main.png', 'melvins_striped_white_back.png', 'melvins_striped_white_detail.png'],
                        ['melvins_striped_black_index.png', 'melvins_striped_black_main.png', 'melvins_striped_black_back.png', 'melvins_striped_black_detail.png'],
                        ['melvins_prick_index.png', 'melvins_prick_main.png', 'melvins_prick_back.png'],
                        ['melvins_bullhead_index.png', 'melvins_bullhead_main.png', 'melvins_bullhead_back.png'],
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
