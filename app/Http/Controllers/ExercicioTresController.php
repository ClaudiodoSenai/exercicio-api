<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function media(Request $request){
        $n1 = $request->numero_um;
        $n2 = $request->numero_dois;
        $n3 = $request->numero_tres;
        
        return json_encode([
            'resultado' => ($n1+$n2+$n3)/3
        ]); 
    }
    
}
