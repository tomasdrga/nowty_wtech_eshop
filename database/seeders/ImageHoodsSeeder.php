<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageHoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $products = Product::all()->where('category', 'hoods');

      $imageTypes = ['index', 'main', 'secondary', 'secondary', 'secondary'];
      $imageNames = [['AOI_hooded_work_jacket_index.png', 'AOI_hooded_work_jacket_main.png', 'AOI_hooded_work_jacket_back.png', 'AOI_hooded_work_jacket_detail_1.png', 'AOI_hooded_work_jacket_detail_2.png'],
        ['AOI_zip_up_hooded_index.png', 'AOI_zip_up_hooded_main.png', 'AOI_zip_up_hooded_back.png', 'AOI_zip_up_hooded_detail_1.png', 'AOI_zip_up_hooded_detail_2.png'],
        ['bonded_sherpa_zip_grey_index.png', 'bonded_sherpa_zip_grey_main.png', 'bonded_sherpa_zip_grey_back.png', 'bonded_sherpa_zip_grey_detail_1.png', 'bonded_sherpa_zip_grey_detail_2.png'],
        ['isnt_it_hood_black_index.png', 'isnt_it_hood_black_main.png', 'isnt_it_hood_black_back.png', 'isnt_it_hood_black_detail_1.png', 'isnt_it_hood_black_detail_2.png'],
        ['isnt_it_hood_navy_index.png', 'isnt_it_hood_navy_main.png', 'isnt_it_hood_navy_back.png', 'isnt_it_hood_navy_detail_1.png','isnt_it_hood_navy_detail_2.png'],
        ['pigment_wash_ferg_zip_index.png', 'pigment_wash_ferg_zip_main.png', 'pigment_wash_ferg_zip_back.png', 'pigment_wash_ferg_zip_detail_1.png'],
        ['reversible_vest_hood_index.png', 'reversible_vest_hood_main.png', 'reversible_vest_hood_back.png', 'reversible_vest_hood_detail_1.png','reversible_vest_hood_detail_2.png'],
        ['tri_dragon_hood_black_index.png', 'tri_dragon_hood_black_main.png', 'tri_dragon_hood_black_back.png', 'tri_dragon_hood_black_detail_1.png'],
        ['tri_dragon_hood_brown_index.png', 'tri_dragon_hood_brown_main.png', 'tri_dragon_hood_brown_back.png', 'tri_dragon_hood_brown_detail_1.png'],
        ['tricot_track_jacket_index.png', 'tricot_track_jacket_main.png', 'tricot_track_jacket_back.png', 'tricot_track_jacket_detail_1.png'],
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
