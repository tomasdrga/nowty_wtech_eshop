<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ImageAccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $products = Product::all()->where('category', 'accessories');

      $imageTypes = ['index', 'main', 'secondary', 'secondary', 'secondary'];
      $imageNames = [['dog_collar_index.png', 'dog_collar_main.png', 'dog_collar_back.png',  'dog_collar_detail_1.png','dog_collar_detail_2.png'],
        ['font_water_bottle_index.png', 'font_water_bottle_main.png', 'font_water_bottle_back.png', 'font_water_bottle_detail_1.png', 'font_water_bottle_detail_2.png'],
        ['hairbrush_index.png', 'hairbrush_main.png', 'hairbrush_back.png', 'hairbrush_detail_1.png','hairbrush_detail_2.png'],
        ['metal_dice_index.png', 'metal_dice_main.png', 'metal_dice_back.png', 'metal_dice_detail_1.png', 'metal_dice_detail_2.png'],
        ['pool_balls_index.png', 'pool_balls_main.png', 'pool_balls_back.png', 'pool_balls_detail_1.png','pool_balls_detail_2.png'],
        ['santoku_knife_index.png', 'santoku_knife_main.png', 'santoku_knife_back.png', 'santoku_knife_detail_1.png','santoku_knife_detail_2.png'],
        ['supreme_skull_index.png', 'supreme_skull_main.png', 'supreme_skull_back.png', 'supreme_skull_detail_1.png','supreme_skull_detail_2.png'],
        ['tactical_chair_index.png', 'tactical_chair_main.png', 'tactical_chair_back.png', 'tactical_chair_detail_1.png','tactical_chair_detail_2.png'],
        ['toy_green_index.png', 'toy_green_main.png', 'toy_green_back.png', 'toy_green_detail_1.png','toy_green_detail_2.png'],
        ['umbrela_huntsman_index.png', 'umbrela_huntsman_main.png', 'umbrela_huntsman_back.png', 'umbrela_huntsman_detail_1.png', 'umbrela_huntsman_detail_2.png']
      ];

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
