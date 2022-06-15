<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use JetBrains\PhpStorm\NoReturn;

class CarController extends Controller
{
    #[NoReturn] public function test()
    {
        $result = Car::query()->limit(10)->get()->whereNotNull()->toArray();
        return view('showResult',['result' => $result]);
    }
}
