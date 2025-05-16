<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index ()
    {
        return view('auth.register');
    }
    public function store(Request $request){
        //dd($request);
        //dd($request->get('email'));
        $this->validate($request, [
            'name'=>'required|max:30',
            'password'=>'required|confirmed|min:6',
            'username'=>'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:60',
        ]);
        //se utilizan helpers para dar formato a estos datos
        User::create([
            'name'=> $request->name,
            'username'=>Str::slug($request->username),//lo convierte en url
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);

        //autenticación de un usuario
        auth()->attempt([ //intenta la autenticacion
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        //otra forma de autenticacion
        //auth()->attempt($request->only('email', 'password'));


        return redirect()->route('post.index');
    }
}
