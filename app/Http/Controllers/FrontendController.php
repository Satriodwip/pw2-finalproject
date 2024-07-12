<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
{
    $cars = Car::all();

    return view('frontends.home', compact('cars'));
}

    public function carlist()
{
    $cars = Car::all();

    return view('frontends.carlist', compact('cars'));
}
    public function detail()
{
    $cars = Car::all();

    return view('frontends.detail', compact('cars'));
}
    public function contact()
{
    $cars = Car::all();

    return view('frontends.contact', compact('cars'));
}
}