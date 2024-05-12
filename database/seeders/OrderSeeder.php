<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Nonstandard\Uuid;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $baseOrder = [
        'id' => Uuid::uuid4(),
        'order_number' => '1234567890',
        'user_id'=>'9bf339c0-27b1-497f-b968-481afa3ea1c5',
        'shipping_id' => '9bf339f6-1f46-4717-a30e-7c4c5dc494b7',
        'payment_id'=> 'd3b3b3b3-3b3b-3b3b-3b3b-3b3b3b3b3b3b',
        'created_at' => '',
        'order_status' => 'processing',
        'total' => '',
      ];

      for ($i = 0; $i < 100; $i++) {
        $order = $baseOrder;

        // Generate a random date for the current year
        $date = new DateTime();
        $date->setDate($date->format('Y'), rand(1, 12), rand(1, 28));
        $total = rand(100, 999999) / 100;
        $shipping = rand(10, 9999) / 100;
        $order['shipping_price'] = number_format($shipping, 2, '.', '');
        $order['created_at'] = $date->format('Y-m-d');
        $order['order_number'] = '123456' . str_pad($i, 10, '0', STR_PAD_LEFT);
        $order['id'] = Uuid::uuid4();
        $order['total'] = number_format($total, 2, '.', '');
        DB::table('orders')->insert($order);
      }
    }
}
