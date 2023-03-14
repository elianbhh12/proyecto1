<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistroCotroller extends Controller
{
    public function index(){
        return view('registro');
    }
    public function store(Request $request){
    
        // dd($request);

        $request -> request -> add(['username' => Str::slug($request->username)]);

        $validated = $request-> validate([
            'name' => 'required|min:4',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:50',
            'password' => 'required|min:6|max:50',
        ]);


        User::create([
            
            'name' => $request ->name,
            'username' => Str::slug($request ->username),
            'email' => $request ->email,
            'password' => Hash::make( $request ->password),

        ]);

        auth()->attempt([
            'email' => $request-> email,
            'password' => $request -> password,
        ]);

        return redirect() -> route('login');

    }
}
