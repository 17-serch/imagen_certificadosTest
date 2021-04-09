{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>

            



        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}





<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>

    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2 ">
            <form class="bg-white px-7 py-12 rounded shadow-md w-full">
                <h1 class="mb-12 text-5xl text-center font-serif md:georgia text-black">Login</h1>
                <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" class="fill-current  h-100 w-100 mr-2 -mt-3" width="250" height="250">

                <label class="uppercase tracking-wide text-black font-serif  mb-10 w-50 text-xl"for="usuario">Usuario</label>
                <input type="text"
                    class="block border border-green-900 w-full p-3 rounded mb-4 text-blue-800"
                    name="usuario"
                    placeholder=""/>

                <label class="uppercase tracking-wide text-black font-serif mb-10 w-50 text-xl" 
                    for="contraseña"> Contraseña 
                </label>

                <input 
                    type="password"
                    class="block border border-green-900 w-full p-3 rounded mb-4 text-blue-800"
                    name="password"
                    placeholder=""/>
                
                <a href="#">       

                <div class="text-center text-sm text-gray-700 mt-3">
                <button class="bg-blue hover:bg-blue-dark text-gray-700 font-bold py-2 px-4 rounded text-2xl">
                    <a href="actualizacion_datos">Ingresar</a>
                </button>
                </div>
                <div class="text-gray-900 mt-3 h-12">
                    <a href="crear_cuenta" class="no-underline border-b border-blue-500 text-black text-center">
                        <p>Crear cuenta</p>
                    </a>.
                </div>

                {{-- Login with Facebook --}}
                <div class="flex items-center justify-end mt-4">
                    <a class="btn" href="{{ url('auth/facebook') }}"
                        style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                        Login with Facebook
                    </a>
                </div>


                {{-- Login with Facebook --}}
                <div class="flex items-center justify-end mt-4">
                    <a class="btn" href="{{ url('auth/google') }}"
                        style="background: #d11818; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                        Login with google
                    </a>
                </div>


            </form>
        </div>
     </div>


    
</body>
</html>