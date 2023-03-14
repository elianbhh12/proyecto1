<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite('resources/css/app.css')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>>
        <body >
            <div class="container mx-auto px-4 py-8 flex flex-col justify-center min-h-screen">
                <img
                class="mx-auto w-48"
                src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logotipo_USTA_Colombia.gif"
                alt="logo"
                />
                <br>
                <h1 class="text-4xl font-bold text-gray-900 text-center mb-4">Portal De Inicio</h1>
                <p class="text-lg text-gray-700 text-center mb-8">Accede a tu portal personal de la Universidad Santo Tomas de Bucaramanga</p>
                <a type="button" href="{{ route("login") }}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto">Iniciar Sesion</a>
                <br>
                <a type="button" href="{{ route("registro") }}"  class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-auto">Registrarse</a>
            </div>
    </body>
</html>
