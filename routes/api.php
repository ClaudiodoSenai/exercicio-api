<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/quatro', 
[ExercicioQuatroController::class, 'verificarNumero']);

Route::post('exercicio/tres', 
[ExercicioTresController::class, 'media']);

Route::post('exercicio/cinco', 
[ExercicioCincoController::class, 'exercicioCinco']);

Route::post('exercicio/seis', 
[ExercicioSeisController::class, 'doadorSangue']);