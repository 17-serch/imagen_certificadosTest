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
<body>

    <div class="bg-grey-lighter min-h-screen flex flex-col">
        @if (session('info'))
            <div class="bg-red-100 p-5 text-white">{{session('info')}}</div>
        @endif

        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2 ">
            
            <form action="{{ route('user.create') }}" method="PUT" class="bg-white px-7 py-12 rounded shadow-md w-full">
                @csrf
                <h1 class="mb-12 text-5xl text-center font-serif md:georgia text-black">Login</h1>
                <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" class="fill-current  h-100 w-100 mr-2 -mt-3" width="250" height="250">

                <label class="uppercase tracking-wide text-black font-serif  mb-10 w-50 text-xl" for="usuario">Email</label>
                <input type="text"
                    class="block border border-green-900 w-full p-3 rounded mb-4 text-blue-800"
                    name="email"
                    placeholder=""/>

                <label class="uppercase tracking-wide text-black font-serif mb-10 w-50 text-xl" 
                    for="contraseña">Contraseña 
                </label>

                <input 
                    type="password"
                    class="block border border-green-900 w-full p-3 rounded mb-4 text-blue-800"
                    name="password"
                    placeholder=""/>
                
                <a href="#">       

                <div class="text-center text-sm text-gray-700 mt-3">
                    <input type="submit" value="Ingresar" class="bg-blue hover:bg-blue-dark text-gray-700 font-bold py-2 px-4 rounded text-2xl">
                </div>
            </form>

                <div class="text-gray-900 mt-3 h-12">
                    <a href="crear_cuenta" class="no-underline border-b border-blue-500 text-black text-center">
                        <p>Crear cuenta</p>
                    </a>
                </div>

 

                {{-- Login with Facebook --}}
                <div class="mt-4 text-center p-3 w-full">
                    <a class="grid grid-cols-8 grid-rows-1" href="{{ url('login/facebook') }}">
                        <div class="py-2 col-start-1 col-end-2">
                            <img class="absolute w-ful h-6" src="https://cdn.icon-icons.com/icons2/2108/PNG/512/facebook_icon_130940.png"/>
                        </div>
                        <p class="bg-blue-100 text-white py-2 rounded col-start-2 col-end-10">Login with facebook</p>
                    </a>
                    <!-- style="background: #d11818; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;" -->
                </div>


                {{-- Login with Facebook --}}
                <div class="mt-4 text-center p-3 w-full">
                    <a class="grid grid-cols-8 grid-rows-1" href="{{ url('login/google') }}">
                        <div class="py-2 col-start-1 col-end-2">
                            <img class="absolute w-ful h-6" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                        </div>
                        <p class="bg-red-100 text-white py-2 rounded col-start-2 col-end-10">Login with google</p>
                    </a>
                    <!-- style="background: #d11818; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;" -->
                </div>

        </div>
     </div>

</body>
</html>