<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-grey-100">

    <div class="bg-grey-lighter min-h-screen flex flex-col">
        
        @if (session('info'))
            <div class="bg-red-100 p-5 text-white">{{session('info')}}</div>
        @endif
        
        <div class="container max-w-lg px-10 shadow-md py-14 mt-20 bg-white rounded">
            
            <form action="{{ route('user.create') }}" method="PUT" class="pb-10 w-full">
                @csrf
                <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" width="250" height="250">
                <h1 class="mt-16 mb-6 text-5xl text-center text-black font-sans">Login</h1>
                
                @if (isset($alert))
                    <div class="my-5 p-5 text-center bg-red-100 w-full text-white">
                        {{$alert}}
                    </div>
                @endif
              
                <label class="font-sans ml-2 uppercase tracking-wide text-black w-50 text-xl"for="usuario">Email</label>
                <input name="email" type="text"class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" placeholder="ejemplo@ejemplo.com"/>

                <label class="font-sans ml-2 uppercase tracking-wide text-black w-50 text-xl" for="contraseña">Contraseña</label>
                <input name="password" type="password" class="mt-3 block border border-green-900 w-full p-3 rounded mb-4 text-blue-800" placeholder="contraseña"/>     

                <div class="grid grid-row-2 gap-4">
                    <input id="submit" type="submit" value="Ingresar" class="outline-none text-base text-white px-10 py-3 transition duration-500 ease-in-out bg-gray-500 hover:bg-blue-500 transform hover:scale-105">
        
                    <a href="{{ url('crear_cuenta') }}" class="no-underline text-black text-center">
                        <p>Crear cuenta</p>
                    </a>
                </div>

            </form>

            <div class="mt-4 text-center w-full">
                <a class="grid grid-cols-8 grid-rows-1" href="{{ url('login/facebook') }}">
                    <div class="py-2 col-start-1 col-end-2">
                        <img class="transition duration-500 ease-in-out transform hover:scale-110 w-ful h-8" src="https://cdn.icon-icons.com/icons2/2108/PNG/512/facebook_icon_130940.png"/>
                    </div>
                    <p class="leading-loose bg-blue-100 text-white py-2 rounded col-start-2 col-end-10 transition duration-500 ease-in-out hover:bg-blue-600 transform hover:scale-105">Login with facebook</p>
                </a>
            </div>

            <div class="mt-4 text-center w-full">
                <a class="grid grid-cols-8 grid-rows-1" href="{{ url('login/google') }}">
                    <div class="py-2 col-start-1 col-end-2">
                        <img class="transition duration-500 ease-in-out transform hover:scale-110  w-ful h-8" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                    </div>
                    <p class="leading-loose bg-red-100 text-white py-2 rounded col-start-2 col-end-10 transition duration-500 ease-in-out hover:bg-red-600 transform hover:scale-105">Login with google</p>
                </a>
            </div>

        </div>

     </div>

</body>
</html>