<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>crear cuenta</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        
    </head>
<body class="bg-grey-100 grid grid-rows-1">
	<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-7 py-9 rounded shadow-md w-full">
                    <h1 class="mb-8 text-5xl text-center font-serif md:georgia text-black">CREAR CUENTA</h1>

                    <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" class="fill-current h-100 w-100 mr-2" width="250" height="250">

                    <label class="uppercase tracking-wide text-black font-serif mb-10 w-50 text-xl"
                        for="usuario"> Usuario 
                    </label>
                    
                    <input 
                        type="text"
                        class="block border border-green-900  w-full p-3 rounded mb-4 text-blue-800"
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
                    
                      

                    <label class="uppercase tracking-wide text-black font-serif mb-10 w-50 text-xl" 
                        for="contraseña"> Confirmar contraseña
                    </label>

                    <input 
                        type="password"
                        class="block border border-green-900 w-full p-3 rounded mb-4 text-blue-800"
                        name="password"
                        placeholder=""/>

                    <a href="#">   
                    
                    <div class="text-center text-sm text-gray-700 mt-3">
                    <button class="bg-blue hover:bg-blue-dark text-gray-700 font-bold py-2 px-4 rounded text-2xl">
                    Crear
                    </button>
                    </div>
                        
                </div>
            </div>
    </div>
</body>
</html>