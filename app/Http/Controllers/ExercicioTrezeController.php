<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTrezeController extends Controller
{
    public function divisivel(Request $request)
    {
        $numeros = [];

        for ($i = 1; $i <= 100; $i++) {
            if ($i % $request->entrada == 0) {
                array_push($numeros, $i);
            }
        }

        return json_encode([
            'valores' => $numeros
        ]);
    }
}
