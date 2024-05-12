<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class HoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $faker = \Faker\Factory::create();

      $bottoms_names = ['AOI Hooded Work Jacket', 'AIO Zip Up Hooded SweatShirt', 'Bonded Sherpa Zip Hood Grey Marl',
        'ISNT IT HOOD Black', 'ISNT IT HOOD NAVY', 'Pigment Wash Tri-Ferg Zip Hood',
        'Reversible Vest Hood Deep Green', 'Tri-Dragon Hood Nice Black', 'Tri-Dragon Hood Nice Brown',
        'Tricot Track Jacket'];

      $bottoms_description = ['Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit',
        'Big up real trees\nFake ones are shit'];

      $bottoms_technical_details = ['Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
        'Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware'];

      for ($i=0; $i < 10; $i++) {
        Product::create([
          'id' => Uuid::uuid4(),
          'name' => $bottoms_names[$i],
          'description' => $bottoms_description[$i],
          'technical_details' => $bottoms_technical_details[$i],
          'category' => 'hoods',
          'price' => round(rand(9000, 100000) / 100.0, 2),
          'created_at' => now(),
          'updated_at' => now()
        ]);
      }
    }
}
