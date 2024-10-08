<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cars', [CarController::class, 'showCars']);
Route::post('cars/search-by-class', [CarController::class, 'searchByClass']);
Route::post('cars/search-by-name', [CarController::class, 'searchByName']);
route::get('/cars/{title}', [CarController::class, 'showCar']);
