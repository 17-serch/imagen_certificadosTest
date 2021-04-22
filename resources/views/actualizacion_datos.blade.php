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
<body class="bg-grey-100">

    {{-- <div class="p-10">
        {{$userLogueado}}
    </div> --}}

    <div class="container max-w-3xl bg-white my-20 py-10 rounded">
        
        <div class="container">
            @if ($errors->all())
                <ul class="bg-red-100 p-5 text-white my-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
    
            <!-- header (logos fundación esquel) -->
            <div class=" grid grid-cols-2 gap-5">
                <a class="m-auto pt-10" href="https://www.esquel.org.ec/">
                    <img src="https://www.esquel.org.ec/templates/g5_hydrogen/custom/images/Logo%20Esquel%20Horizontal.svg" alt="logo" width="250" height="250" link="https://www.esquel.org.ec/" >
                </a>
                <a class="m-auto pt-10" href="https://esquelclic.org/">
                    <img src="https://esquelclic.org/images/logos/LogoCLIC%20.svg" alt="logo" width="250" height="250">
                </a> 
            </div>
    
        </div>
    
        <form action="{{ route('user.update', $userLogueado->id)}}" method="POST" class="grid grid-rows-9 gap-10 mx-16">
            @csrf
            @method('PUT')

            <h1 class='text-center text-4xl mt-20'>Actualiza tus datos</h1>

            <div class="">
                <label class="font-sans ml-2 uppercase tracking-wide text-black text-xl">Nombres</label>
                <input class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" value="{{$userLogueado->name}}" name="name" type="text" placeholder="Lucia Mary">
            </div>
 
            <div class="">
                <label class="font-sans ml-2 uppercase tracking-wide text-black text-xl">Apellidos</label>
                <input class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" name="apellido" type="text" placeholder="Garcia Perez">
            </div>
     
            <div class="">
                <label class="font-sans ml-2 uppercase tracking-wide text-black text-xl">Celular</label>
                <input class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" name="telefono" type="text" placeholder="0987532156">
            </div>
                
 
            <div class="">
                <label class="font-sans ml-2 uppercase tracking-wide text-black text-xl">Cédula o pasaporte</label>
                <input class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" name="cedula" type="text" placeholder="1254896352">
            </div>
       
            <div class="">
                <label class="font-sans ml-2 uppercase tracking-wide text-black text-xl">Genero</label>
                <input class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" name="genero" type="text" placeholder="1254896352">
            </div>
       
            <div class="">
                <label class="font-sans ml-2 uppercase tracking-wide text-black text-xl">Contraseña</label>
                <input class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" name="password" type="text" placeholder="1254896352">
            </div>
   
            <div class="">
                <label class="font-sans ml-2 uppercase tracking-wide text-black text-xl">Verifica Contraseña</label>
                <input class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" name="password_2" type="text" placeholder="1254896352">
            </div>
                  
            <input type="submit" value="Guardar" class="outline-none text-base text-white px-10 py-3 transition duration-500 ease-in-out bg-gray-500 hover:bg-blue-500 transform hover:scale-105">
     
        </form>

    </div>

</body>
</html>
