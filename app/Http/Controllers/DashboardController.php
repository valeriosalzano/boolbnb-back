<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $apartments = Apartment::where('user_id', Auth::id())->count();

        return view('dashboard', compact('apartments'));
    }
}
