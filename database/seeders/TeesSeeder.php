<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class TeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $tees_names = ['Tunnel Tee', 'Travis Main', 'Supreme TNF', 'Supreme 30',
                      'Nice Brown Tee', 'Melvins Striped White', 'Melvins Striped Black', 'Melvins Prick',
                      'Melvins Bullhead', 'Chiz Face'];

        $tees_description = ['Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit',
                              'Big up real trees\nFake ones are shit'];

        $tees_technical_details = ['Heavy cotton\nBranded hammer loop\nSide pockets\nMetal hardware',
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
                'name' => $tees_names[$i],
                'description' => $tees_description[$i],
                'technical_details' => $tees_technical_details[$i],
                'category' => 'tees',
                'price' => round(rand(9000, 15000) / 100.0, 2),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
