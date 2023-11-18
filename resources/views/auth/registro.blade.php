@extends('layouts.app')

@section('titulo')
    Registrar personas a la DB
@endsection

@section('contenido')

<div class="md:flex md:justify-center">
    <div class="md:w-4/12 bg-blue-900 p-6 rounded-xl shadow-xl">
        <form action="" method="post">
            @csrf
        <div class="mb-5">
            <label for="name" class="mb-4 block text-white text-2xl">Nombre: </label>
            <input type="text" id="name" name="name" placeholder="Nombre" class="border-2 border-black p-3 w-full rounded-lg">

            @error('name')
                <p class="text-red-500 rounded-lg text-sm p-2 text-left">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="cedula" class="mb-4 block text-white text-2xl">Cedula</label>
            <input type="text" id="cedula" name="cedula" placeholder="Cedula" class="border-2 border-black p-3 w-full rounded-lg">
            @error('cedula')

                <p class="text-red-500 rounded-lg text-sm p-2 text-left ">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="telefono" class="mb-4 block text-white text-2xl">Numero de telefono</label>
            <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="border-2 border-black p-3 w-full rounded-lg">
            @error('telefono')

                <p class="text-red-500 rounded-lg text-sm p-2 text-left">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="direccion" class="mb-4 block text-white text-2xl">Dirección</label>
            <input type="text" id="direccion" name="direccion" placeholder="Direccion" class="border-2 border-black p-3 w-full rounded-lg">

            @error('direccion')
                <p class= "text-red-500 rounded-lg text-sm p-2 text-left ">{{$message}}</p>
            @enderror
        </div>


        <input type="submit" value="Registrar" class=" w-1/2 bg-cyan-400 hover:bg-cyan-500 transition-colors cursor-pointer font-bold p-3 text-white rounded-lg">

    </form>
    </div>
</div>
@endsection