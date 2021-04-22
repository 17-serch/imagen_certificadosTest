<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Cursos Recibidos</title>
</head>

<body class="container">

    <div class="p-10">
        {{$userLogueado}}
    </div>

    <div>
        <!--======= Inicio de Navegacion =========-->
        <nav class="flex items-center justify-between flex-wrap bg-grey-100 p-6">
            <div class="flex items-center flex-wrap text-write mr-6">
            <a href="https://www.esquel.org.ec/">
                <img src="https://www.esquel.org.ec/templates/g5_hydrogen/custom/images/Logo%20Esquel%20Horizontal.svg" alt="logo" class="fill-current h-100 w-100 mr-2" width="250" height="250">
            </a>
            </div>
            <div>
                <a href="https://esquelclic.org/">
                    <img class="fill-current h-100 w-100 mr-2" width="250" height="250" src="https://esquelclic.org/images/logos/LogoCLIC%20.svg" alt="esquel clic">
                </a> 
            </div> 
            <div class="block lg:hidden">
                <button id='boton' class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div id='menu' class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden">
                <div class="text-sm lg:flex-grow">
                    <a href="{{ route('mas_cursos.index', $userLogueado->id) }}" class=" px-4 py-2 text-green-300 rounded hover:text-green-100
                      hover:bg-white text-xl font-semibold">
                        Cursos Para ti
                    </a>
                </div>
        </nav>
        <!--======= Fin de Navegacion =========-->
        <!--======= Inicio header=========-->
        <header class="bg-white shadow">
            <div class="py-6 px-4 sm:px-6 lg:items-center ">
                <h1 class="text-3xl font-bold text-green-300 text-center">Cursos Recibidos</h1>
            </div>
            <!--======= Fin header=========-->

        </header>

        <div class="py-6 px-4 sm:px-10 lg:items-center">
            <ul>
                <li>
                    <div class="flex justify-end mb-5">
                        <h3 class="text-xl font-bold leading-none mr-2">Nombre del usuario :</h3>
                        <p class="text-xl leading-none">{{ $userLogueado->name }}</p>
                        {{-- <input class="text-xl" type="text" value="{{ $userLogueado->name }}"> --}}
                    </div>
                </li>
                <li>
                    <div class="flex justify-end">
                        <h3 class="text-xl font-bold leading-none mr-2">Número de Cedula :</h3>
                        <p class="text-xl leading-none">{{ $userLogueado->cedula}}</p>
                        {{-- <input class="text-xl" type="text" value="{{ $userLogueado->cedula }}"> --}}
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </header>
    
    <div class="mb-80 container py-10 2xl:p-30 xl:p-20 ">
        <table class="container border-collapse border border-grey-100 text-lg">
            <thead class="text-left border-collapse border border-text-white  bg-grey-100 font-bold">
                <tr>
                    <th class="p-3 w-1/2 ">Cursos</th>
                    <th class="p-3 w-1/4 ">Horas Realizadas</th>
                    <th class="p-3 w-1/4 ">Descarga</th>
                </tr>
            </thead>
            <tbody class="border-collapse border border-grey-100 ">
                @foreach($cursosAprobado as $curso)
                <tr class="border-collapse border border-grey-100 ">
                    <td class="p-3">{{$curso->nombre}}</td>
                    <td class="p-3">{{$curso->horas}}</td>
                    <td class="p-3 text-black text-opacity-40 hover:text-opacity-100"><a href="formulario">858</a></td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
    <!--======= footer =========-->
    <div class=" bg-white shadow">
            <div class="text-right text-green-300 shadow font-sans text-lg">
                <div class="flex justify-end  hover:text-green-300 
                      hover:bg-grey-100">
                <ul>
                <h3 class="font-bold">CONTÁCTANOS</h3>
                <li>Av. Colón E4-175 entre Amazonas y Foch, Ed.</li>
                <li>Torres de la Colón, Mezzanine Of. 12 Quito - Ecuador</li>
                <li>fundacion@esquel.org.ec</li>
                <li>+(5932) 252-0001</li>
                </ul>
                </div>
            </div>
        </div>
    <footer class=" bg-black shadow">
        <ul class="p-0 py-2 border border-t-2 border-grey-100 border-b-0 border-l-0 border-r-0 grid grid-cols-1 md:grid-cols-2 gap-x-0 gap-y-0 md:gap-y-0">
            <li class="xl:py-0 lg:py-0 md:py-5 sm:py-5 py-2 text-center text-white "><a href="#">© 2021 Fundación Esquel</a></li>
        </ul>
    </footer>
    </div>
</body>
</html>
