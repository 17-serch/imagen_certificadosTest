<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        
<body class="bg-grey-100 grid grid-rows-1">
	<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2 ">
                <div class="bg-white px-7 py-12 rounded shadow-md w-full">
                    <h1 class="mb-12 text-5xl text-center font-serif md:georgia text-black">Login</h1>

                    <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" class="fill-current  h-100 w-100 mr-2 -mt-3" width="250" height="250">

                    <label class="uppercase tracking-wide text-black font-serif  mb-10 w-50 text-xl"
                        for="usuario"> Usuario 
                    </label>
                    
                    <input 
                        type="text"
                        class="block border border-green-900 w-full p-3 rounded mb-4 text-blue-800"
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
                    
                    <a href="#">       

                    <div class="text-center text-sm text-gray-700 mt-3">
                    <button class="bg-blue hover:bg-blue-dark text-gray-700 font-bold py-2 px-4 rounded text-2xl">
                        <a href="actualizacion_datos">Ingresar</a>
                    </button>
                    </div>
                    <div class="text-gray-900 mt-3 h-12">
                    <a href="crear_cuenta" class="no-underline border-b border-blue-500 text-black text-center">
                        <p>Crear cuenta</p>
                    </a>.
                </div>
            <div class="mt-2">
            <div id="fb-root "></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0&appId=490217198832630&autoLogAppEvents=1" nonce="80oQupWo"></script>
            <div class="fb-login-button  mb-10 -mt-11 ml-9 " data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
            </div>
            </div>

            <button class=" w-64 h-10 bg-red-500 rounder-sm self-center align-items float-right -mt-20 ml-3  text-white ext-base tracking-wider font-sans" >
               <div class="absolute -mt-2  -ml-3 w-10 h-10 rounded bg-white ">
               <img class="absolute mt-3 ml-3 w-5 h-5  " src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
               </div>
            <b>Continuar con Google</b></p>
            </button>
                </div>
               
         </div>
      </div>
    </div>
</body>
</html>

<!--
Este login no es que estamos usando ...el que usamos y vemos es el que esta en auth
-->