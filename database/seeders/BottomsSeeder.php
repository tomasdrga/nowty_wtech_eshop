<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class BottomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $bottoms_names = ['Trouser Realtree Timber', 'P90 Baggy Jean Stone Wash', 'Cargo Deer Print',
                          'Fleece Hexa Camo Grey', 'Double Knee Painter Pant', 'Tricot Track Pant',
                          'Cotton Cinch Pant', 'Faux Fur Short', 'Tag Nylon Short',
                          'Carp Short Realtree'];

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
                'category' => 'bottoms',
                'price' => round(rand(9000, 100000) / 100.0, 2),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
