<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\signinRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin()
    {
        return view("signin");
    }
    public function signin_store(signinRequest $request)
    {
        $validatedData = $request->validated();
        if (Auth::attempt($validatedData) ){
            return redirect()->route('staffs.index');
        }
    }
    public function logout()
    { 
        Auth::logout();
        return redirect()->route('signin');
    }
}
