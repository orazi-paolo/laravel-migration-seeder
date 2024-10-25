<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Carbon;

use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        // carbon now per ottenere la data e l'ora corrente
        $now = Carbon::now();
        // seleziono i treni che hanno l'orario di partenza maggiore dell'ora e la data corrente
        $trains = Train::where('orario_di_partenza', '>=', $now)->get();
        return view('pages.trains.index', compact('trains'));
    }
}