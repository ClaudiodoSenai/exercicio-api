<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioSeisController extends Controller
{
    public function doadorSangue(Request $request){

        if($request->idade >= 12 && $request->idade <= 18 ){
            return json_encode([
                'O usuário é adolescente' 
            ]);
        } else if($request->idade < 12 ){
            return json_encode([
                'O usuário é uma criança' 
            ]);
        } else if ($request->idade > 18){
            return json_encode([
                'message' => 'O usuario é um adulto '
            ]);
        }


    }
}
