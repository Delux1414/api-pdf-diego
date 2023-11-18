<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar pdf</title>
</head>
<body>
<div class="overflow-x-auto pt-10">
      <table class="min-w-full bg-slate-400 border border-black">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b">Id</th>
            <th class="py-2 px-4 border-b">Nombre</th>
            <th class="py-2 px-4 border-b">Cedula</th>
            <th class="py-2 px-4 border-b">Telefono</th>
            <th class="py-2 px-4 border-b">Direccion</th>
          </tr>
        </thead>
        <tbody>

        @if($dato)
          <tr>

            <td class="py-2 px-4 border-b text-center">{{ $dato->id }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $dato->name }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $dato->cedula }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $dato->telefono }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $dato->direccion }}</td>
          
          </tr>
          @endif
        </tbody>
      </table>
    </div>
</body>
</html>