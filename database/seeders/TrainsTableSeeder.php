<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newTrain = new Train;
            $newTrain->company=$faker->company();
            $newTrain->departure_station=$faker->city().' '.$faker->streetName().' Station';
            $newTrain->arrival_station=$faker->city().' '.$faker->streetName().' Station';
            $newTrain->departure_time=$faker->dateTimeThisMonth();
            $newTrain->arrival_time=$faker->dateTimeThisMonth();
            $newTrain->train_code=$faker->ean8();
            $newTrain->n_carriages=$faker->numberBetween(0, 124);
            $newTrain->delayed=$faker->numberBetween(0, 1);
            $newTrain->cancelled=$faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
