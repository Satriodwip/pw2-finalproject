<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::all();

        return view('loans.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        $users = User::all();
        return view('loans.create', compact('users', 'cars'));
    }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user_id' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',

        ]);

        $totalCost = intval($request->input('total_cost'));

        $loan = new Loan();
        $loan->car_id = $request->input('car_id');
        $loan->user_id = $request->input('user_id');
        $loan->loan_date = $request->input('loan_date');
        $loan->return_date = $request->input('return_date');
        $loan->total_cost = $totalCost;
        $loan->status = $request->input('status');
        $loan->save();

        Loan::create($validatedData);

        return redirect('/loans')->with('success', 'Loan added successfully!');
    }

        /**
         * Display the specified resource.
         */
        public function show(Loan $Loan)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Loan $loan)
        {
            $cars = Car::all();
            $users = User::all();
            return view('loans.edit', compact('loan','users', 'cars'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Loan $loan)
        {
            $validatedData = $request->validate([
            'car_id' => 'required',
            'user_id' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',


            ]);
        
            $loan->update($validatedData);
        
            return redirect('/loans')->with('success',  'Loan updated successfully!');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Loan $loan)
        {
            $loan->delete();
            return redirect('/loans')->with('success', 'loan deleted successfully!');
        }
    }