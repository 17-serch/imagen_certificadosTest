<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Cursos para Ti</title>
</head>

<style>
    #General {
        border: 3px solid black;
        border-radius: 10px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        width: 850px;
        height: auto;
    }
</style>

<body>

    {{-- <div class="p-10">
        {{$userLogueado}}
    </div> --}}

    <div>

        <!--======= Inicio de Navegacion =========-->
        <nav class="flex items-center justify-between flex-wrap  bg-grey-100 px-6">

            <div class="flex items-center flex-wrap text-write mr-6 my-5">
                <a href="https://www.esquel.org.ec/">
                    <img src="https://www.esquel.org.ec/templates/g5_hydrogen/custom/images/Logo%20Esquel%20Horizontal.svg" alt="logo" width="250" height="250">
                </a>
            </div>
            <div class=" ">
                <a href="https://esquelclic.org/">
                    <img width="250" height="250" src="https://esquelclic.org/images/logos/LogoCLIC%20.svg" alt="esquel clic" awidth="250" height="250">
                </a> 
            </div>

            <div class="block lg:hidden">
              <button id='boton' class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>

            <div id='menu' class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden py-5">
                
                <!-- Campos que aparecen en el menu desplegable -->
                <div class="text-sm lg:flex-grow">
                    <a href="{{route('cursos.index', ['id' => $userLogueado->id])}}" class="px-4 py-2 text-green-300 rounded hover:text-green-100 hover:bg-white text-xl font-semibold">Certificados</a>
                </div>

            </div>

          </nav>

          <!-- Verifica eventos del mouse en el menu desplegable del nav -->
          <script>
            const boton = document.querySelector('#boton');
            const menu = document.querySelector('#menu');

            boton.addEventListener('click', () => {
                console.log('click')
                menu.classList.toggle('hidden')
            })
          </script>
        <!--======= Fin de Navegacion =========-->

    </div>


    <!-- titutlo -->
    <div class=" text-center py-12">
        <h1 class="font-bold text-green-100 break-normal text-3xl md:text-5xl">Mas Cursos Para TI</h1>
    </div>


    <!-- tabla -->
    <div id="General" class="container mx-auto bg-green-200 rounded p-8 text-center overflow-y-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-bold bg-negro uppercase tracking-wider">CURSO</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-bold bg-negro uppercase tracking-wider">FECHA DE INICIO</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-bold bg-negro uppercase tracking-wider">INFORMACION</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                <!-- Imprimimos todos los cursos -->
                @foreach($cursosNuevo as $nuevo)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://image.flaticon.com/icons/png/512/1567/1567341.png" alt="IMAGEN ICONO">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm text-gray-900 text-center">{{$nuevo->nombre}}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-white">{{$nuevo->horas}}</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <button href="#" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">VER</button>
                        </td>
                    </tr>
                @endforeach()
                <!-- mas tablas tr -->
            </tbody>
        </table>
    </div>
    

    <!--======= footer =========-->
    <footer class="mt-80 footer bg-green-200 relative pt-1 border-b-2 border-blue-700">
        <div class="container mx-auto p-6">
            <div class="sm:flex sm:mt-8">
                <div class="px-10 mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                    <div class="flex flex-col">
        
                        <!--======= Redes sociales =========-->
                        <span class="font-bold text-center text-gray-700 uppercase mb-2">Area Social</span>
                        <span class="my-2"><a href="https://www.facebook.com/fundacion.esquel/" class="text-blue-700  text-md hover:text-blue-500">Siguenos en Facebook</a></span>
                        <span class="my-2"><a href="https://twitter.com/FundacionEsquel" class="text-blue-700  text-md hover:text-blue-500">Siguenos en Twitter</a></span>
                        <span class="my-2"><a href="https://www.youtube.com/channel/UCS7JrWLBuGoJqhE7ZzNr3Og" class="text-blue-700  text-md hover:text-blue-500">Visítanos en Youtube</a></span>
                    </div>
                    <div class="flex flex-col">
        
                        <!--======= Contactos =========-->
                        <span class="font-bold text-center text-gray-700 uppercase mt-4 md:mt-0 mb-2">Contáctanos</span>
                        <div class="sm:text-right text-left text-white">
                            <i>Av. Colón E4-175 entre Amazonas y Foch, Ed.</i><br>
                            <i>Torres de la Colón, Mezzanine Of. 12 Quito - Ecuador</i><br>
                            <i><a href="fundacion@esquel.org.ec" class="text-blue-700  text-md hover:text-blue-500">fundacion@esquel.org.ec</a></i><br>
                            <i>+(5932) 252-0001</i><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--======= footer =========-->
        <div class=" bg-black shadow">
            <ul class="py-5 border border-b-0 border-l-0">
                <li class="text-center text-white "><a href="#">© 2021 Fundación Esquel</a></li>
            </ul>
        </div>

    </footer>

</body>
</html>
