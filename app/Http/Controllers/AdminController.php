<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return view("admin.menu");
        } else {
            // You can redirect or return an error view here for non-admin users
            return redirect()->route('home');
        }
    }
}

