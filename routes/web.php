<?php

use App\Http\Controllers\ControladorPrueba;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [ControladorPrueba::class,'mostrar']);
Route::post('/creacion', [ControladorPrueba::class,'prueba']);
