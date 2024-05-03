<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('information')->insert([
        'id' => 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3c',
        'user_id' => '9bf339c0-27b1-497f-b968-481afa3ea1c5',
        'shipping_id' => '9bf339f6-1f46-4717-a30e-7c4c5dc494b7',
        'payment_id'=> 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3b',
      ]);
    }
}
