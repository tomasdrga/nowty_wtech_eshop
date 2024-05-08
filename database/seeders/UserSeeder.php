<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

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
        'created_at' => '2024-05-02 11:46:13'
      ]);

      DB::table('users')->insert([
        'id' => '9bf339c0-27b1-497f-b968-481afa3bc1a5',
        'name' => 'admin',
        'email'=>'admin@gmail.com',
        'password' => bcrypt('12345678'),
        'role' => 'admin',
        'created_at' => '2024-05-02 11:46:13'
      ]);

      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'Maros',
        'email'=>'maros@gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => '2024-05-02 11:46:13'
      ]);

      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'Jozef Vajda',
        'email'=>'jozko123@gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => '2024-05-02 11:46:13'
      ]);

      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'Tana',
        'email'=>'t_drexler@gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => '2024-05-02 11:46:13'
      ]);

      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'Frantisek',
        'email'=>'franto@gmail.com',
        'password' => bcrypt('12345678'),
        'role' => 'admin',
        'created_at' => '2024-05-02 11:46:13'
      ]);

      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'Helena',
        'email'=>'vondrackova8gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => '2024-05-02 11:46:13'
      ]);

      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'Majka',
        'email'=>'pasteka@gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => '2024-05-02 11:46:13'
      ]);

      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'lacike',
        'email'=>'lacko@gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => '2024-05-02 11:46:13'
      ]);
      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'Iveta',
        'email'=>'bartosova@gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => '2024-05-02 11:46:13'
      ]);
      DB::table('users')->insert([
        'id' => Uuid::uuid4(),
        'name' => 'David',
        'email'=>'luu20@gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => '2024-05-02 11:46:13'
      ]);
    }
}
