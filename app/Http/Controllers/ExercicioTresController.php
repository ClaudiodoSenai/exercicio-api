<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioTresRequest;
use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function media(ExercicioTresRequest $request){
        $n1 = $request->primeiro_numero;
        $n2 = $request->segundo_numero;
        $n3 = $request->terceiro_numero;
        
        return json_encode([
            'resultado' => ($n1+$n2+$n3)/3
        ]); 
    }
    
}
