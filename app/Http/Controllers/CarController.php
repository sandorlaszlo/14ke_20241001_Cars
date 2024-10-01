<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    private $cars;

    public function __construct()
    {
        $this->cars = Storage::json('cars2.json')['cars'];
        // dd($this->cars);
    }

    public function showCars(){
        //....
        return view('cars', ['cars' => $this->cars]);
    }
}
