<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::post('/cadastro/save', [CadastroController::class, 'save']);

//return view('welcome');
