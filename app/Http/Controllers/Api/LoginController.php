<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this-> validateLogin($request);

        if(Auth::attempt($request -> only('email','password'))){
            $token = $request->user()->createToken($request->name)->plainTextToken;

            return response()->json([
                'access_token' => $token,
                'message' => 'Login successful'
            ]);
        } 

        return response()->json([
            'message' => 'The provided credentials are incorrect.'
        ], 401);
    }

    public function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required'
        ]);     
    }
}
