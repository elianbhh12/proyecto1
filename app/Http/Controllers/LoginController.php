<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('sesion');
    }

    public function store(Request $request){


        $validated = $request -> validate([
            'email' => 'required|email',
            'password' => 'required',
            

        ]);



        if (!auth()->attempt($request->only('email','password'))){
        return back()->with('mensaje', 'usuario o contraseña incorrecta');
        }
        return redirect()->route('accesoseguro');

    }

}
