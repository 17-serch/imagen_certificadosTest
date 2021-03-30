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
<body class="bg-gray-700">
	<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-green-100 px-7 py-9 rounded shadow-md w-full">
                    <h1 class="mb-8 text-5xl text-center font-serif md:georgia text-gray-600">Login</h1>

                    <img src="/img/logo.png">

                    <label class="uppercase tracking-wide text-indigo-600 font-serif mb-10 w-50 text-xl"
                        for="usuario"> Usuario 
                    </label>
                    
                    <input 
                        type="text"
                        class="block border border-gray-600  w-full p-3 rounded mb-4 text-blue-800"
                        name="usuario"
                        placeholder=""/>

                    <label class="uppercase tracking-wide text-indigo-600 font-serif mb-10 w-50 text-xl" 
                        for="contraseña"> Contraseña 
                    </label>

                    <input 
                        type="password"
                        class="block border border-gray-600 w-full p-3 rounded mb-4 text-blue-800"
                        name="password"
                        placeholder=""/>
                    
                    <a href="#">       

                    <div class="text-center text-sm text-grey-dark mt-3">
                    <button class="bg-blue hover:bg-blue-dark text-gray-500 font-bold py-2 px-4 rounded text-2xl">
                        Ingresar  
                    </button>
                    </div>
                </div>

                <div class="text-gray-50 mt-6">
                    ¿No dispones de una cuenta?
                    <a class="no-underline border-b border-blue text-gray-200">
                        Crea Aquí
                    </a>.
                </div>
            </div>
    </div>
</body>
</html>