<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CerrarSesionController extends Controller
{
    public function store(){

        // dd("cerrar Sesion");

    auth()->logout();
    return redirect()->route('login');

    }
}
