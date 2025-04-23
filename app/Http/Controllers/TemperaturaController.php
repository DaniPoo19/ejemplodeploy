<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperaturaController extends Controller
{
    public function index()
    {
        return view('vista1');
    }

    public function convertir(Request $request)
    {
        $request->validate([
            'fahrenheit' => 'required|numeric',
        ]);

        $f = $request->fahrenheit;
        $c = ($f - 32) * 5 / 9;
        $k = $c + 273.15;

        return view('vista1', [
            'fahrenheit' => $f,
            'celsius' => round($c, 2),
            'kelvin' => round($k, 2),
        ]);
    }
}
