<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
          'id' => 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3d',
          'order_number' => '1234567890',
          'user_id'=>'9bf339c0-27b1-497f-b968-481afa3ea1c5',
          'shipping_id' => '9bf339f6-1f46-4717-a30e-7c4c5dc494b7',
          'payment_id'=> 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3b',
          'created_at' => '2024-10-01',
          'order_status' => 'processing',
          'total' => 148814.00,
        ]);

        DB::table('orders')->insert([
          'id' => 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3d3d',
          'order_number' => '8888567890',
          'user_id'=>'9bf339c0-27b1-497f-b968-481afa3ea1c5',
          'shipping_id' => '9bf339f6-1f46-4717-a30e-7c4c5dc494b7',
          'payment_id'=> 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3b',
          'created_at' => '2024-10-02',
          'order_status' => 'shipped',
          'total' => 8888.00,
        ]);

        DB::table('orders')->insert([
          'id' => 'd3b3b3b3-3b3b-3b3b-3b3b-3d3d3b3b3b3d',
          'order_number' => '5678900192',
          'user_id'=>'9bf339c0-27b1-497f-b968-481afa3ea1c5',
          'shipping_id' => '9bf339f6-1f46-4717-a30e-7c4c5dc494b7',
          'payment_id'=> 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3b',
          'created_at' => '2024-10-03',
          'order_status' => 'delivered',
          'total' => 1488.00,
        ]);

        DB::table('orders')->insert([
          'id' => 'b3b3b3b3-3b3b-3b3b-3b3b-3d3d3b3b3b3d',
          'order_number' => '1005678900',
          'user_id'=>'9bf339c0-27b1-497f-b968-481afa3ea1c5',
          'shipping_id' => '9bf339f6-1f46-4717-a30e-7c4c5dc494b7',
          'payment_id'=> 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3b',
          'created_at' => '2024-10-04',
          'order_status' => 'canceled',
          'total' => 15909.00,
        ]);
    }
}
