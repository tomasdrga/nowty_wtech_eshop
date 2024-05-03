<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('users')->insert([
        'id' => '9bf339c0-27b1-497f-b968-481afa3ea1c5',
        'name' => 'matej',
        'email'=>'matej@gmail.com',
        'password' => bcrypt('12345678'),
      ]);
    }
}
