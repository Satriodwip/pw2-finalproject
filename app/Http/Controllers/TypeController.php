<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        return view('types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('types.create', compact('types'));
    }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        Type::create($validatedData);

        return redirect('/types')->with('success', 'Cars added successfully!');
    }

        /**
         * Display the specified resource.
         */
        public function show(Type $type)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Type $type)
        {
            $types = Type::all();
            return view('types.edit', compact('type', 'types'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Type $type)
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'required',

            ]);
        
            $type->update($validatedData);
        
            return redirect('/types')->with('success',  'Type updated successfully!');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Type $type)
        {
            $type->delete();
            return redirect('/types')->with('success', 'Type deleted successfully!');
        }
    }