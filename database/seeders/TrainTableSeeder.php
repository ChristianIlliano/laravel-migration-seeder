<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Carbon\Carbon;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 12; $i++) {
            $newTrain = new Train();
            $newTrain-> Agency = $faker->name();
            $newTrain-> starting_station = $faker->city();
            $newTrain-> arrival_station = $faker->city();
            $newTrain-> departure_time = Carbon::now();
            $newTrain-> arrival_time = Carbon::now();
            $newTrain-> train_code = $faker->ean13();
            $newTrain-> carriages_number = $faker->randomDigit() ;
            $newTrain-> in_time = 1;
            $newTrain-> cancelled = 0;
            $newTrain->save();
        }
    }
}
