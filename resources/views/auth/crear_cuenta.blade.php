<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crear Cuenta</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        
    </head>
<body class="container bg-grey-100 ">
	<div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container mt-10 px-7 py-20 rounded max-w-lg bg-white shadow-md">

            <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" width="250" height="250">
            <h1 class="mt-20 mb-6 text-5xl text-center text-black font-sans">CREAR CUENTA</h1>
           
            @if ($errors->all())
                <ul class="text-center  bg-red-100 p-5 text-white my-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @if (isset($alert))
                <div class="text-center my-5 px-5 py-3 text-sm bg-red-100 w-full text-white">
                    {{$alert}}
                </div>
            @endif

            <form action="{{ route('createUser') }}" method="PUT" class="rounded max-w-lg">
                @csrf
                <label class="ont-sans ml-2 uppercase tracking-wide text-gray-500 hover:text-black w-50 text-xl" for="email">Email 
                    <input type="text" class="mt-3 block border border-gray-500 hover:border-black w-full p-3 rounded mb-4 text-blue-800 transition duration-300 ease-in-out transform"
                        name="email" placeholder="Email"/>
                </label>
                

                <label class="ont-sans ml-2 uppercase tracking-wide text-gray-500 hover:text-black w-50 text-xl" for="password">Contraseña 
                    <input 
                        type="password"
                        class="mt-3 block border border-gray-500 hover:border-black w-full p-3 rounded mb-4 text-blue-800 transition duration-300 ease-in-out transform"
                        name="password"
                        placeholder="Contraseña"/>
                </label>

                
                <label class="ont-sans ml-2 uppercase tracking-wide text-gray-500 hover:text-black w-50 text-xl" for="password">Confirmar contraseña
                    <input 
                        type="password"
                        class="mt-3 block border border-gray-500 hover:border-black w-full p-3 rounded mb-4 text-blue-800 transition duration-300 ease-in-out transform"
                        name="password"
                        placeholder="Contraseña"/>   
                </label>


                <div class="grid grid-row-1 gap-4 pt-5 text-center">
                    <input type="submit" value="Crear" class="w-full outline-none text-base text-white px-10 py-3 transition duration-500 ease-in-out bg-gray-500 hover:bg-blue-500 transform hover:scale-105">
                    <a href="login">Iniciar sesión</a>
                </div>

            </form>

        </div>
    </div>
</body>
</html>
