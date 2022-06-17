<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function show()
    {
        $cars =Car::all()->sortBy('id')->toArray();
        return view('showCars',['cars' => $cars]);
    }
}
