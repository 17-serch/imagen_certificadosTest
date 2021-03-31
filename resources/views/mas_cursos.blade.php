<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>CURSOS PARA TI</title>
</head>

<body>

    <div class="w-full max-w-8xl mx-auto">

  <!--panel navegacion-->
        <nav class="flex items-center justify-between flex-wrap bg-green-200 p-6">
            <div class="flex items-center flex-wrap text-write mr-6">
                <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" class="fill-current h-100 w-100 mr-2" width="250" height="250">
            </div>
            <div class="block lg:hidden">
                <button id='boton' class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div id='menu' class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class=" px-4 py-2 text-white rounded hover:text-green-100
                    hover:bg-white text-xl font-semibold  ">
                        Certificados
                    </a>
                </div>
        </nav>

    <!--titutlo-->
        <div class=" text-center pb-10 pt-10 ">
            <h1 class="font-bold text-green-800 break-normal text-3xl md:text-5xl">Mas Cursos Para Ti</h1>
        </div>
        <!--tabla-->
        <div class="container mx-auto bg-green-200 rounded  px-8 py-8 text-center overflow-y-auto scrollbar-w-2">
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
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-400 text-green-800">40 Horas</span>
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
</html>
