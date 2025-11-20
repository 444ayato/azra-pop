<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CreatePelangganDummy extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1000; $i++) {
            DB::table('pelanggan')->insert([
                'first_name' => $faker->firstName,
                'last_name'  => $faker->lastName,
                'birthday'   => $faker->date('Y-m-d'),
                'gender'     => $faker->randomElement(['Male', 'Female']),
                'email'      => $faker->unique()->safeEmail,
                'phone'      => $faker->phoneNumber,
            ]);
        }
    }
}
