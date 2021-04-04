<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getResponse()
    {
        $Apikey = '0614cae6576f27d1846c34d46d912da4';
        $url = 'api.openweathermap.org/data/2.5/weather?q=London&appid=';
        $response = Http::get($url . $Apikey)->json();
        return view('index', compact(['response']));
//        return $response;
    }
}
