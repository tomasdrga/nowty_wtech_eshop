<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageBottomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $products = Product::all()->where('category', 'bottoms');

       $imageTypes = ['size_guide', 'index', 'main', 'secondary', 'secondary', 'secondary'];
       $imageNames = [['palace_tree_size_guide.png', 'palace_tree_index.png', 'palace_tree_main.png', 'palace_tree_back.png', 'palace_tree_side.png', 'palace_tree_detail_1.png'],
                      ['palace_denim_size_guide.png', 'palace_denim_index.png', 'palace_denim_main.png', 'palace_denim_back.png', 'palace_denim_detail_1.png', 'palace_denim_detail_2.png'],
                      ['palace_deer_size_guide.png', 'palace_deer_index.png', 'palace_deer_main.png', 'palace_deer_back.png', 'palace_deer_side.png', 'palace_deer_detail_1.png'],
                      ['palace_camo_size_guide.png', 'palace_camo_index.png', 'palace_camo_main.png', 'palace_camo_back.png', 'palace_camo_detail_1.png', 'palace_camo_detail_2.png'],
                      ['supreme_zebra_size_guide.png', 'supreme_zebra_index.png', 'supreme_zebra_main.png', 'supreme_zebra_back.png', 'supreme_zebra_detail_1.png'],
                      ['supreme_black_size_gudie.png', 'supreme_black_index.png', 'supreme_black_main.png', 'supreme_black_back.png', 'supreme_black_detail_1.png'],
                      ['supreme_car_size_guide.png', 'supreme_car_index.png', 'supreme_car_main.png', 'supreme_car_back.png', 'supreme_car_detail_1.png'],
                      ['supreme_fur_size_guide.png', 'supreme_fur_index.png', 'supreme_fur_main.png', 'supreme_fur_back.png', 'supreme_fur_detail_1.png'],
                      ['supreme_brown_size_guide.png', 'supreme_brown_index.png', 'supreme_brown_main.png', 'supreme_brown_back.png', 'supreme_brown_detail_1.png'],
                      ['palace_short_tree_size_guide.png', 'palace_short_tree_index.png', 'palace_short_tree_main.png', 'palace_short_tree_back.png', 'palace_short_tree_detail_1.png', 'palace_short_tree_detail_2.png'],
                      ];

       $product_number = 0;
       foreach ($products as $product) {
         Image::create([
           'id' => Uuid::uuid4(),
           'name' => $sizeGuideImages[$product_number],
           'type' => 'size_guide',
           'product_id' => $product->id,
           'created_at' => now(),
           'updated_at' => now()
         ]);
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
