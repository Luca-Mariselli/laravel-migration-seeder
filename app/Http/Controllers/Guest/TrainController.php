<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function home() {
        $trains = Train::all();

        $dati = [
            "trains" => $trains
        ];

        return view('home', $dati);
    }
}
