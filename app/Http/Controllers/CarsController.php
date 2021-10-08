<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $cars_no_sell = Car::unsell()->get();
        $cars_sell = Car::sell()->get();

        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        $cars = Car::all();

        return view('cars.show', compact('car','cars'));
    }
}
