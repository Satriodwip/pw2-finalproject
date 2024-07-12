<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $types = Type::all();
    return view('cars.create', compact('types'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'type_id' => 'required',
        'photo' => 'required|image',
        'cost_per_day' => 'required',
        'year' => 'required',
        'license_plate' => 'required',
    ]);

    if ($request->hasFile('photo')) {
        $extension = $request->file('photo')->getClientOriginalExtension();
        $imageName = time(). '.'. $extension;

        $request->file('photo')->storeAs('src/images/car', $imageName, 'public');
        $validatedData['photo'] = $imageName;
    }

    Car::create($validatedData);

    return redirect('/cars')->with('success', 'Cars added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $types = Type::all();
        return view('cars.edit', compact('car', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'type_id' => 'required',
            'photo' => 'nullable|image',
            'cost_per_day' => 'required',
            'year' => 'required',
            'license_plate' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete('src/images/car/' . $car->photo);

            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageName = time(). '.'. $extension;

            $request->file('photo')->storeAs('src/images/car', $imageName, 'public');
            $validatedData['photo'] = $imageName;

        }
    
        $car->update($validatedData);
    
        return redirect('/cars')->with('success',  'Car updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $photo = Storage::disk('public')->delete('src/images/car/' . $car->photo);

        $car->delete($photo);
        return redirect('/cars')->with('success', 'Car deleted successfully!');
    }
}