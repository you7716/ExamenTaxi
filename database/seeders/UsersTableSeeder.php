<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'fullname' => $faker->name,
                'age' => $faker->numberBetween(1, 50),
                'sexe' => $faker->name,
                'image' => $faker->name,
                'email' => $faker->name,
                'password' => Hash::make('password'),
            ]);
        }
    }
}

