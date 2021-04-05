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
<body class="bg-blue-200">
	<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-green-400 px-7 py-9 rounded shadow-md w-full">
                    <h1 class="mb-8 text-5xl text-center font-serif md:georgia text-gray-100">Login</h1>

                    <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" class="fill-current h-100 w-100 mr-2" width="250" height="250">

                    <label class="uppercase tracking-wide text-indigo-600 font-serif mb-10 w-50 text-xl"
                        for="usuario"> Usuario 
                    </label>
                    
                    <input 
                        type="text"
                        class="block border border-white  w-full p-3 rounded mb-4 text-blue-800"
                        name="usuario"
                        placeholder=""/>

                    <label class="uppercase tracking-wide text-indigo-600 font-serif mb-10 w-50 text-xl" 
                        for="contraseña"> Contraseña 
                    </label>

                    <input 
                        type="password"
                        class="block border border-white w-full p-3 rounded mb-4 text-blue-800"
                        name="password"
                        placeholder=""/>
                    
                    <a href="#">       

                    <div class="text-center text-sm text-grey-100 mt-3">
                    <button class="bg-blue hover:bg-blue-dark text-gray-100 font-bold py-2 px-4 rounded text-2xl">
                        Ingresar  
                    </button>
                    </div>
                </div>

                <div class="text-gray-50 mt-6">
                    ¿No dispones de una cuenta?
                    <a href="C:\Users\User\Dropbox\Mi PC (Home)\Desktop\sirve\certificadosTest\resources\views\crear_cuenta.blade.php" class="no-underline border-b border-blue-500 text-gray-200">
                        Crea Aquí
                    </a>.
                </div>
            </div>
    </div>
</body>
</html>