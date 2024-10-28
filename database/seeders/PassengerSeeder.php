<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10 ; $i++) {
            $newPassenger = new Passenger();
            $newPassenger->name = $faker->firstName();
            $newPassenger->lastname = $faker->lastName();
            $newPassenger->age = $faker->numberBetween(18, 80);
            $newPassenger->email = $faker->email();
            $newPassenger->save();
        }
    }
}