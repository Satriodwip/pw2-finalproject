<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $loans = Loan::all();

    return view('welcome', compact('loans'));
}
}
