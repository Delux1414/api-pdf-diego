<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="bg-gray-100 flex flex-col">

        <header class="p-5 border-b border-sky300 bg-sky-200 shadow-xl shadow-sky-100 flex justify-between">
            <h1 class="text-3xl">Registro de datos de personas</h1>
                <div class="flex justify-end gap-7">
                <a class="text-2xl hover:text-gray-700" href="{{route('registrarse')}}">Registrar personas</a>
                <a class="text-2xl hover:text-gray-700" href="{{route('mostrarDatos')}}">Visualizar datos</a>
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="text-center text-4xl mb-10">
                @yield('titulo')
            </h2>
            <h3>Nada interesante, aun...</h3>
            <h3>Navega por los botones del header</h3>
            @yield('contenido')

        </main>

        @isset($datos)
        <h1 class="text-3xl text-center mb-10">Visualizacion de los datos registrados</h1>
        <div class="flex justify-center">
            <table class=" w-[80%] h-[60px] border-2 border-indigo-900">
                <tr class="bg-indigo-500 ">
                    <th class="border-2 border-black">ID</th>
                    <th class="border-2 border-black">Nombre</th>
                    <th class="border-2 border-black">Cédula</th>
                    <th class="border-2 border-black">Teléfono</th>
                    <th class="border-2 border-black">Dirección</th>
                    <th class="border-2 border-black">Opciones</th>
                    <th class="border-2 border-black"></th>
                </tr>


                @foreach($datos as $dato)
                    <tr class="bg-indigo-300 ">
                        <td class="border-2 border-black text-center lowercase">{{ $dato->id }}</td>
                        <td class="border-2 border-black text-center lowercase">{{ $dato->name }}</td>
                        <td class="border-2 border-black text-center lowercase">{{ $dato->cedula }}</td>
                        <td class="border-2 border-black text-center lowercase">{{ $dato->telefono }}</td>
                        <td class="border-2 border-black text-center lowercase">{{ $dato->direccion }}</td>
                        <td class="w-[100px]">
                            <a href="{{route('usuario.actualizarDatos', $dato->id)}}" class=" w-[200px] text-white bg-blue-800 hover:bg-blue-600 font-medium rounded-lg text-sm px-4 py-2.5 ml-10 mr-10  dark:bg-blue-600 dark:hover:bg-blue-700 flex justify-center">
                                Actualizar datos</a>
                        </td>
                            <td>
                                <form action="{{ route('usuario.eliminarUsuario', $dato->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" w-[200px] mt-2 focus:outline-none text-white bg-red-800 hover:bg-red-900  font-medium rounded-lg text-sm px-4 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mr-10">
                                        Eliminar usuario
                                    </button>
                                </form>
                                    <a href="{{ route('usuario.formatoPDF', $dato->id) }}">
                                        <button class="bg-gray-200 mt-2 hover:bg-gray-300 text-gray-900 font-bold p-3 rounded-md pb-4 border-2 border-black overflow-hidden  ">
                                            <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                        </button>
                                        
                                    </a>
                            </td>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @endisset


        <footer class="text-center p-5 text-gray-500 font-bold">
            Crud Sena, {{date("Y")}}
        </footer>
    </body>
</html>
