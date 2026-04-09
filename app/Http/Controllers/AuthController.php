<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {   
        //$pass = 1234;
        //echo Hash::make($pass);
        if (Auth::guard('user')->attempt(['nisn' => $request->nisn, 'password' => $request->password])) {
            return redirect('/dashboard');
        }
        else {
            return redirect('/login')->with(['warning' => 'Nisn atau password salah!']);
        }
    }
}
