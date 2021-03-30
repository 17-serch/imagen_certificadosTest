<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizacion</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
</head>
<style>
    #primero {
        width: 400px;
        height: 150px;
        margin: auto;
        margin-top: 10px;
        margin-bottom: 50px;
    }
 
    #General {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border: 3px solid black;
        border-radius: 10px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        width: 850px;
        height: 900px;
    }
</style>
<body class="bg-green-150">
    <div id='General' class="bg-white">
        <div id='primero'>
            <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png"
                alt="Fundacion Esquel">
        </div>
        <div>
            <h1 class='text-center text-5xl'>Actualiza tus datos</h1>
            <div>
                <div class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl my-2">
                    <div class="md:flex w-full">
                        <div class="p-8">
                            <h1 class="block mt-1 text-xl leading-tight font-medium text-black">Nombres</h1>
                            <input type="text" class="mt-4 focus:ring-black focus:border-black block w-full shadow-sm sm:text-sm border-black rounded-md" placeholder="Lucia Mary">
                        </div>
                    </div>
                </div>
                <div class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl my-2">
                    <div class="md:flex w-full">
                        <div class="p-8">
                            <h1 class="block mt-1 text-xl leading-tight font-medium text-black">Apellidos</h1>
                            <input type="text" class="mt-4 focus:ring-black focus:border-black block w-full shadow-sm sm:text-sm border-black rounded-md" placeholder="Garcia Perez">
                        </div>
                    </div>
                </div>
                <div class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl my-2">
                    <div class="md:flex w-full">
                        <div class="p-8">
                            <h1 class="block mt-1 text-xl leading-tight font-medium text-black">Celular</h1>
                            <input type="text" class="mt-4 focus:ring-black focus:border-black block w-full shadow-sm sm:text-sm border-black rounded-md" placeholder="0987532156">
                        </div>
                    </div>
                </div>
                <div class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl my-2">
                    <div class="md:flex w-full">
                        <div class="p-8">
                            <h1 class="block mt-1 text-xl leading-tight font-medium text-black">Cédula o pasaporte</h1>
                            <input type="text" class="mt-4 focus:ring-black focus:border-black block w-full shadow-sm sm:text-sm border-black rounded-md" placeholder="1254896352">
                        </div>
                    </div>
                </div>
                <button type="submit" class="ml-20 mt-5 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-xl font- rounded-xl text-black bg-green-400 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Guardar
                </button>
            </div>
        </div>
        <div id="Final">
            <footer>
            </footer>
        </div>
    </div>
</html>
