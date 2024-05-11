<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_information')->insert([
            'id' => 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3b',
            'first_name' => 'Matej',
            'last_name' => 'Jonatan',
            'card_number' => '1234567890123456',
            'expiration_date' => '12/24',
            'security_code' => '123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
