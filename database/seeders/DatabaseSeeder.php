<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BottomsSeeder::class);
        $this->call(ImageBottomsSeeder::class);
        $this->call(HoodsSeeder::class);
        $this->call(ImageHoodsSeeder::class);
        $this->call(TeesSeeder::class);
        $this->call(ImageTeesSeeder::class);
        $this->call(HatsSeeder::class);
        $this->call(ImageHatsSeeder::class);
        $this->call(AccessoriesSeeder::class);
        $this->call(ImageAccessoriesSeeder::class);

        $this->call(MaterialSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(SizeSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(ShippingInformationSeeder::class);
        $this->call(PaymentInformationSeeder::class);
        $this->call(InformationSeeder::class);

        $this->call(OrderSeeder::class);

        $this->call
    }
}
