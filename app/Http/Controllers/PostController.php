<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//verifica que el usuario este autenticado
    }
    public function index()
    {
        //dd(auth()->user());
        return view('dashboard');
    }
}
