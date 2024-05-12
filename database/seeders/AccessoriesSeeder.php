<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class AccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accessories_names= ['dog collar', 'font water bottle','hairbrush', 'metal dice', 'pool balls', 'santoku knife', 'supreme skull',' tactical chair','toy green', 'umbrella huntsman', 'zipo lighter'];
        $accessories_description = ['In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere',
          'In america\neveryone drives everywhere'];

        $accessories_technical_details = ['Dishwasher safe',
          'Dishwasher safe',
          'Dishwasher safe',
          'Dishwasher safe',
          'Dishwasher safe',
          'Dishwasher safe',
          'Dishwasher safe',
          'Dishwasher safe',
          'Dishwasher safe',
          'Dishwasher safe'];

        for ($i=0; $i < 10; $i++) {
          Product::create([
            'id' => Uuid::uuid4(),
            'name' => $accessories_names[$i],
            'description' => $accessories_description[$i],
            'technical_details' => $accessories_technical_details[$i],
            'category' => 'accessories',
            'price' => round(rand(900, 10000) / 100.0, 2),
            'created_at' => now(),
            'updated_at' => now()
          ]);
        }

    }
}
