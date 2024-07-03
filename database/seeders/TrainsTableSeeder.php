<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $treno3 = new Train();
        $treno3 ->azienda = 'Frecciarossa';
        $treno3 ->stazione_partenza = 'Palermo';
        $treno3 ->stazione_arrivo = 'Trento';
        $treno3 ->orario_partenza = '12:11:00';
        $treno3 ->orario_arrivo = '14:21:00';
        $treno3 ->codice_treno = '23485930';
        $treno3 ->numero_carrozze = 8;
        $treno3 ->in_orario = 1;
        $treno3 ->cancellato = 0;
        $treno3 ->save();
    }
}
