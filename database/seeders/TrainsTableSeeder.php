<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $new_train = new Train(); // istanzio un ogg del modello

        $new_train->company = $faker->randomElement(['Italo', 'Trenord', 'Trenitalia', 'Eurocity']);
        $new_train->departure_staion = $faker->city();
        $new_train->arrival_station = $faker->city();
        $new_train->departure_time = $faker->time();
        $new_train->arrival_time = $faker->time();
        $new_train->train_code = $faker->postcode();
        $new_train->wagons = rand(3, 8);
        $new_train->on_time = rand(0, 1);
        $new_train->cancelled = rand(0, 1);

        $new_train->save();
    }
}
