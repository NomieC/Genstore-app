<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['username' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])){
            $request->session()->regenerate();
        };
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'birthdate' => 'required|date',
            'gender' => 'required|in:male,female',
            'password' => 'required|string|min:6',
        ]);

        // Create a new user record in the database
        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'birthdate' => $request->input('birthdate'),
            'gender' => $request->input('gender'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect the user after registration
        return redirect('/');
        // return redirect()->route('/menus')->with('success', 'Registration successful! Please log in.');
    }
}
