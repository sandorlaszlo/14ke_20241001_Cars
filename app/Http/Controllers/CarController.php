<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showCars(){
        //....
        return view('cars');
    }
}
