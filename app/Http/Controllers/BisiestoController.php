<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BisiestoController extends Controller
{
    public function index()
    {
        return view('vista2');
    }

    public function calcular(Request $request)
    {
        $request->validate([
            'anio' => 'required|integer|min:1|max:2025',
        ]);

        $inicio = (int) $request->anio;
        $bisiestos = [];

        for ($i = $inicio; $i <= 2025; $i++) {
            if (($i % 4 == 0 && $i % 100 != 0) || ($i % 400 == 0)) {
                $bisiestos[] = $i;
            }
        }

        return view('vista2', compact('inicio', 'bisiestos'));
    }
}
