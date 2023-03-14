<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar SesSion</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-screen md:flex">
        <div
            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
            <div>
                <div class="text-center">
                    <img
                    class="mx-auto w-48"
                    src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logotipo_USTA_Colombia.gif"
                    alt="logo"
                    />
                </div>
                <br>
                <h1 class="text-white font-bold text-4xl font-sans">Universidad Santo Tomas</h1>
                <p class="text-white mt-1">Campus Virtual de la Universidad Santo Tomas Seccional Bucaramanga</p>
                <a type="submit" href="{{ route('registro') }}" class="mx-auto w-48 text-center bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Registrarse</a>
            </div>
                <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">

            <form class="bg-white" action="{{ route('login') }}" method="POST">
                @csrf
                @if (session('mensaje'))
                <div role="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 text-center">
                    Ups!!
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <p>{{ session('mensaje') }}</p>
                    </div>
                </div>
                @endif
                <h1 class="text-gray-800 text-center font-bold text-2xl mb-1">Iniciar Sesion</h1>
                <p class="text-sm font-normal  text-center text-gray-600 mb-7">Coloca tus datos de inicio</p>

                

                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                    <input class="pl-2 outline-none border-none" for="email" type="email" name="email" id="email" placeholder="Usuario" />
                    @error('email')
                    <div role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 text-center">
                        Ups!!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                    <input class="pl-2 outline-none border-none" for="password" type="password" name="password" id="password" placeholder="Contraseña" />
                    @error('pass')
                    <div role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 text-center">
                        Ups!!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <input type="submit" 
                    value="iniciar Sesion"
                    class="block w-full text-center bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">
            </form>
        </div>
    </div>
</body>
</html>