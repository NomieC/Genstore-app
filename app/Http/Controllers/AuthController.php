<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(SignupRequest $request)
    {
        dd($request->all());
        $data = $request->validated();

        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'birthdate' => $data['birthdate'],
            'gender' => $data['gender'],
            'password' => $data['password'],
        ]);

        return response([
            'message' => 'done bang'
        ]);
    }


    public function showSignupForm()
    {
        return view('auth.signup'); 
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        $field = filter_var($credentials['username_or_email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (!Auth::attempt([$field => $credentials['username_or_email'], 'password' => $credentials['password']])) {
            return redirect('/login')
                ->with('error', 'Wrong username/email or password');
        }

        $user = Auth::user();
        return response([
            'user' => $user
        ]);
    }



    public function showLoginForm()
    {
        return view('auth.login'); 
    }
    public function logout(Request $request)
    {
        Auth::logout();

        return response('', 204);
    }
    
}
