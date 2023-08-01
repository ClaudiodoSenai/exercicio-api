<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function exercicioCinco(Request $request)
    {
        if ($request->numero % 4 == 0) {
            return json_encode([
                'mensagem' => 'Numero divisivel por 4'
            ]);
        } else {
            return json_encode([
                'mensagem' => 'Numero não divisivel por 4'
            ]);
        }
    }
}
