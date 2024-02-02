<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('authenticate.login');
    }

    public function loginCreate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if($user->role == 'employer') {
                return redirect()->route('index');
            }
            // elseif($user->role == 'employee'){
            //     return redirect()->route('index');
            // }
            else {
                return redirect()->route('index');
            }
            
        }
    }

    public function register() {
        return view('authenticate.register');
    }
    public function registerCreate(Request $request)
    {
        if($request->role=='employee') {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password,),
                'role' => $request->role,
                'status' => 1,
            ]);
        }else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password,),
                'role' => $request->role,
                'status' => 0,
            ]);
        }    
        return redirect()->route('login');
    }
}
