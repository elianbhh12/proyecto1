<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class SecureurlController extends Controller
{

    public function __construct(){

    $this -> middleware('auth');

    }

    public function index(User $user){

        // dd(auth()->user());
        // return view('dashboard');
        $user = User::all();
        return view('dashboard',[
            'users' => $user
        ]);
    }
}
