@extends('layouts.app')

@section('titulo')
   Registate a Instagram
@endsection

@section('contenido') 
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action={{route('register')}} method="POST" novalidate>
                @csrf
                <div>
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        placeholder="Escribe tu nombre"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                    >
                    {{-- @error('name');
                        <p class="text-red-600">El nombre es requerido</p>
                    @enderror --}}
                    @error('name')
                        <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                {{--  --}}
                <div>
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input
                        id="username"
                        type="text"
                        name="username"
                        placeholder="Escribe tu username"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value={{old('username')}}
                    >
                    @error('username')
                        <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                {{--  --}}
                <div>
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input
                        id="email"
                        type="text"
                        name="email"
                        placeholder="Escribe tu correo electronico"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value={{old('email')}}
                    >
                    @error('email')
                        <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                {{--  --}}
                <div>
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Escribe tu contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                        <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                {{--  --}}
                <div>
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Confirma tu password
                    </label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirma tu contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    >
                </div>
                {{--  --}}
                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 mt-5 text-white rounded-lg ">

            </form>

        </div>
    </div>
@endsection
