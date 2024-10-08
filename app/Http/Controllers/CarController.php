<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    private $cars;
    private $classes = [];

    public function __construct()
    {
        $this->cars = Storage::json('cars2.json')['cars'];
        // dd($this->cars);
        foreach ($this->cars as $car) {
            if (isset($car['class']) && !in_array($car['class'], $this->classes)){
                // $this->classes[] = $car['class'];
                array_push($this->classes, $car['class']);
            }
        }
        sort($this->classes);
        // dd($this->classes);
    }

    public function showCars(){
        //....
        return view('cars', ['cars' => $this->cars, 'classes' => $this->classes]);
    }

    public function searchByClass(Request $request)
    {
        // dd($request->all());
        // dd($request->class);

        // $filteredCars = [];
        // foreach ($this->cars as $car) {
        //     if (isset($car['class']) && $car['class'] == $request->class){
        //         $filteredCars[] = $car;
        //     }
        // }

        $filteredCars = array_filter($this->cars, function($car) use ($request) {
            return isset($car['class']) && $car['class'] == $request->class;
        });

        // dd($filteredCars);
        return view('cars', ['cars' => $filteredCars, 'classes' => $this->classes]);
    }

    public function searchByName(Request $request) {
        
        // $filteredCars = [];
        // foreach ($this->cars as $car) {
        //     if (str_contains(strtolower($car['title']), strtolower($request->name))) {
        //         $filteredCars[] = $car;
        //     }
        // }

        $filteredCars = array_filter($this->cars, fn($car) => 
            str_contains(strtolower($car['title']), strtolower($request->name))
        );

        return view('cars', ['cars' => $filteredCars, 'classes' => $this->classes]);
    }

    public function showCar($title){
        // $searchedCar = null;
        // foreach ($this->cars as $car) {
        //     if ($car['title'] == $title){
        //         $searchedCar = $car;
        //         break;
        //     }
        // }

        $result = array_filter($this->cars, fn($car) => $car['title'] == $title);
        $searchedCar = array_pop($result);

        if ($searchedCar == null) {
            return abort(404);
        }

        // dd($searchedCar);
        return view('car', ['car' => $searchedCar]);
    }
}
