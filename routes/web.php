<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CiudadController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ciudades', CiudadController::class);
