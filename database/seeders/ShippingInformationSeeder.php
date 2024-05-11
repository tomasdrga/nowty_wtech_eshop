<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('shipping_information')->insert([
        'id' => '9bf339f6-1f46-4717-a30e-7c4c5dc494b7',
        'first_name' => 'Matej',
        'last_name' => 'Jonatan',
        'telephone' => '0905123456',
        'address' => 'Hlavna 1',
        'city' => 'Kosice',
        'postal_code' => '04001',
        'country' => 'Slovakia',
      ]);
    }
}
