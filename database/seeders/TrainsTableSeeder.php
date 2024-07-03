<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 20; $i++) {
        $treno3 = new Train();
        $treno3 ->azienda = $faker->company;
        $treno3 ->stazione_partenza = $faker->city;
        $treno3 ->stazione_arrivo = $faker->city;
        $treno3 ->orario_partenza = $faker->time;
        $treno3 ->orario_arrivo = $faker->time;
        $treno3 ->codice_treno = $faker->randomNumber;
        $treno3 ->numero_carrozze = $faker->randomDigit;
        $treno3 ->in_orario = $faker->boolean;
        $treno3 ->cancellato = $faker->boolean;
        $treno3 ->save();
        }
    }
}
