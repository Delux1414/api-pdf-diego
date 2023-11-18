@extends('layouts.app')

@section('contenido')
<h1 class="text-3xl text-center">Actualizar el usuario</h1>
    <div class="mt-12 flex justify-center items-center" >
        <form class="flex flex-col w-[400px] gap-3 bg-blue-900 p-5 rounded-xl"
        action="" method="post">
        @csrf
        
        @method('PUT')
            <label class="mb-4 block text-white text-2xl" for="name">Nombre:</label>
            <input class="border-2 border-black p-3 w-full rounded-lg" type="text" id="name" name="name" value="{{$usuario->name}}" required>

            <label class="mb-4 block text-white text-2xl" for="cedula">Cédula:</label>
            <input class="border-2 border-black p-3 w-full rounded-lg" type="text" id="cedula" name="cedula" value="{{$usuario->cedula}}" required>

            <label class="mb-4 block text-white text-2xl" for="telefono">Teléfono:</label>
            <input class="border-2 border-black p-3 w-full rounded-lg" type="tel" id="telefono" name="telefono" value="{{$usuario->telefono}}" required>

            <label class="mb-4 block text-white text-2xl for="direccion">Dirección:</label>
            <input class="border-2 border-black p-3 w-full rounded-lg" type="text" id="direccion" name="direccion" value="{{$usuario->direccion}}" required>

            <button class="w-1/2 bg-cyan-400 hover:bg-cyan-500 transition-colors cursor-pointer font-bold p-3 text-white rounded-lg"
            type="submit">Actualizar</button>
        </form>
    </div>
@endsection