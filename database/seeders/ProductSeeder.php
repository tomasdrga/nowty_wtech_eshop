<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(BottomsSeeder::class);
        $this->call(HoodsSeeder::class);
        $this->call(TeesSeeder::class);
        $this->call(HatsSeeder::class);
        $this->call(AccessoriesSeeder::class);
    }
}
