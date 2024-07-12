<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('users.create', compact('users'));
    }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|string|',

        ]);

        User::create($validatedData);

        return redirect('/users')->with('success', 'User added successfully!');
    }

        /**
         * Display the specified resource.
         */
        public function show(User $user)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(User $user)
        {
            $users = User::all();
            return view('users.edit', compact('user', 'users'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, User $user)
        {
            $validatedData = $request->validate([
                'fullname' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',

            ]);
        
            $user->update($validatedData);
        
            return redirect('/users')->with('success',  'User updated successfully!');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(User $user)
        {
            $user->delete();
            return redirect('/users')->with('success', 'User deleted successfully!');
        }
    }