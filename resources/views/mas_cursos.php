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
    <nav class="bg-green-400">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Abrir Menu</span>

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
              <img class="block lg:hidden h-8 w-auto" src="https://www.esquel.org.ec/templates/g5_hydrogen/custom/images/Logo%20Esquel%20Horizontal.svg" alt="Esquel">
              <img class="hidden lg:block h-8 w-auto" src="https://www.esquel.org.ec/templates/g5_hydrogen/custom/images/Logo%20Esquel%20Horizontal.svg" alt="Esquel">
            </div>
            <div class="hidden sm:block sm:ml-6">
              <div class="flex space-x-4">
                <a href="#" class="bg-green-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Tablero</a>
            </div>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button class="bg-green-800 p-1 rounded-full text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
              <span class="sr-only">Ver Notificaciones</span>
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>
            <div class="ml-3 relative">
              <div>
                <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Abrir Menu Usuario</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
              <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Mi Perfil</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Configuraciones</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Salir</a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!--version movil panel-->
      <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
          <a href="#" class="bg-green-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Tablero</a>
        </div>
      </div>
    </nav>
    <!--titutlo-->
    <div class=" text-center pb-10 pt-10 ">
      <h1 class="font-bold text-green-800 break-normal text-3xl md:text-5xl">Mas Cursos Para TI</h1>
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
</html>