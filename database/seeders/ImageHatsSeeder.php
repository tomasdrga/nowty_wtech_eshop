<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageHatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $products = Product::all()->where('category', 'hats');

         $imageTypes = ['index', 'main', 'secondary', 'secondary', 'secondary'];
         $imageNames = [['postal_cap_index.png', 'postal_cap_main.png', 'postal_cap_back.png', 'postal_cap_detail_1.png', 'postal_cap_detail_2.png'],
                        ['plus_running_hat_index.png', 'plus_running_hat_main.png', 'plus_running_hat_back.png', 'plus_running_hat_detail_1.png'],
                        ['palace_hat_index.png', 'palace_hat_main.png', 'palace_hat_back.png', 'palace_hat_detail_1.png', 'palace_hat_detail_2.png'],
                        ['halftone_balaclava_index.png', 'halftone_balaclava_main.png', 'halftone_balaclava_back.png', 'halftone_balaclava_detail_1.png'],
                        ['bandana_white_index.png', 'bandana_white_main.png', 'bandana_white_back.png', 'bandana_white_detail_1.png', 'bandana_white_detail_2.png'],
                        ['baclava_navy_index.png', 'baclava_navy_main.png', 'baclava_navy_back.png', 'baclava_navy_detail_1.png', 'baclava_navy_detail_2.png'],
                        ['armon_boonie_grey_index.png', 'armon_boonie_grey_main.png', 'armon_boonie_grey_back.png', 'armon_boonie_grey_detail_1.png', 'armon_boonie_grey_detail_2.png'],
                        ['6panel_soft_index.png', '6panel_soft_main.png', '6panel_soft_back.png', '6panel_soft_detail_1.png', '6panel_soft_detail_2.png'],
                        ['6panel_london_index.png', '6panel_london_main.png', '6panel_london_back.png', '6panel_london_detail_1.png'],
                        ['6panel_faster_index.png', '6panel_faster_main.png', '6panel_faster_back.png', '6panel_faster_1.png', '6panel_faster_detail_2.png']
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
