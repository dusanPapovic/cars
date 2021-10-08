<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        //dd($posts);
       // dd($cars);
        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car=Car::findOrFail($id);

        return view('cars.show', compact('car'));
    }
}
