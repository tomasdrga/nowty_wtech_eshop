<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class HatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $hats_names = ['Postal Hat', 'Plus Running Hat', 'Palace Hat',
                          'Halftone Balaclava', 'Bandana White', 'Balaclava Navy',
                          'Armon Boonie Grey', '6-Panel Soft', '6-Panel London',
                          '6-Panel Faster'];

        $hats_description = ['Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit',
                                'Big up real trees\nFake ones are shit'];

        $hats_technical_details = ['Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
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
                'name' => $hats_names[$i],
                'description' => $hats_description[$i],
                'technical_details' => $hats_technical_details[$i],
                'category' => 'hats',
                'price' => round(rand(900, 10000) / 100.0, 2),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
