<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>CURSOS PARA TI</title>
</head>


<style>

    #General {
        border: 3px solid black;
        border-radius: 10px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        width: 850px;
        height: 900px;
    }
</style>


<body>

<!-- Barra de navegacion -->
<nav class="bg-gray-400 p-6">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Botón de menú móvil-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Abrir menú principal</span>

                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-10 w-auto" src="https://esquelclic.org/images/logos/LogoCLIC%20.svg" alt="Esquel">
                    <img class="hidden lg:block h-10 w-auto" src="https://www.esquel.org.ec/templates/g5_hydrogen/custom/images/Logo%20Esquel%20Horizontal.svg" alt="Esquel">
                </div>
                <div class="hidden sm:block sm:m-8">
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Certificados</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menú móvil, mostrar / ocultar según el estado del menú. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Certificados</a>
        </div>
    </div>
</nav>


    <!--titutlo-->
        <div class=" text-center pb-10 pt-10 ">
            <h1 class="font-bold text-green-500 break-normal text-3xl md:text-5xl">Mas Cursos Para TI</h1>
        </div>
        <!--tabla-->
        <div id="General" class="container mx-auto bg-green-500 rounded p-8 text-center overflow-y-auto ">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-bold bg-negro uppercase tracking-wider">CURSO</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-bold bg-negro uppercase tracking-wider">FECHA DE INICIO</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-bold bg-negro uppercase tracking-wider">DURACION CURSO</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-bold bg-negro uppercase tracking-wider">INFORMACION</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://image.flaticon.com/icons/png/512/1567/1567341.png" alt="IMAGEN ICONO">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm text-gray-900 text-center">PROGRAMACION</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="text-sm text-gray-900">25/03/2021</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">40 Horas</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <button href="#" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">VER</button>
                        </td>
                    </tr>
                <!-- mas tablas tr -->
                </tbody>
            </table>
        </div>
    </div>
</body>


<footer class="footer bg-green-500 relative pt-1 border-b-2 border-blue-700">
    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    <span class="font-bold text-center text-gray-700 uppercase mb-2">Area Social</span>
                    <span class="my-2"><a href="https://www.facebook.com/fundacion.esquel/" class="text-blue-700  text-md hover:text-blue-500">Siguenos en Facebook</a></span>
                    <span class="my-2"><a href="https://twitter.com/FundacionEsquel" class="text-blue-700  text-md hover:text-blue-500">Siguenos en Twitter</a></span>
                    <span class="my-2"><a href="https://www.youtube.com/channel/UCS7JrWLBuGoJqhE7ZzNr3Og" class="text-blue-700  text-md hover:text-blue-500">Visítanos en Youtube</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-center text-gray-700 uppercase mt-4 md:mt-0 mb-2">Contáctanos</span>
                        <div style="text-right">
                            <i class="fa fa-home">
                                </i> Av. Colón E4-175 entre Amazonas y Foch, Ed.
                                <br>Torres de la Colón, Mezzanine Of. 12 Quito - Ecuador
                        </div>
                        <div style="text-right">
                            <a href="#" class="text-blue-700  text-md hover:text-blue-500">fundacion@esquel.org.ec</a>
                        </div>
                        <div style="text-right ">
                            <i class="texte-white"></i> +(5932) 252-0001
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">
                    © 2021 Fundación Esquel - Desarrollado por TIC´s Esquel
                </p>
            </div>
        </div>
    </div>
</footer>

</html>
