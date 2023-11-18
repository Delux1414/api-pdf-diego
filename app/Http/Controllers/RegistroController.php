<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Database\QueryException;


class RegistroController extends Controller
{
    //
    public function index() {
        return view('auth.registro');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'name'=>'required',
            'cedula'=>'required',
            'telefono'=>'required',
            'direccion'=>'required'
        ]);

        User::create([
            'name'=>Str::upper($request->name),
            'cedula'=>$request->cedula,
            'telefono'=>$request->telefono,
            'direccion'=>Str::upper($request->direccion)
        ]);

        return view('welcome');
    }

    public function mostrarDatos()
    {
        $datos = User::all();
        return view('layouts.app', compact('datos'));
    }


    public function actualizar($id){
        $usuario = User::findOrFail($id);
        return view('auth.actualizarDatos', compact('usuario'));
    }

    public function actualizarDatos(Request $request, string $id){
        try {
            User::findOrFail($id)->update($request->all());
            return Redirect('/');
            
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error en el metodo actualizar', 'error' => $e->getMessage()]);
        }
    }

    public function eliminarUsuario(string $id){
        try{
            User::find($id)->delete();
            return Redirect('/');
        }catch(\Exception $e){
            return response()->json(['msg' => 'Error al ejecutar el metodo eliminar', 'error'=>$d->getMessage()]);
        }
    }

    public function formatoPDF($id){
        try{
            $dato = User::find($id);
            $formato = Pdf::loadView('/formato', compact('dato'));

            return $formato->download('dato.pdf');
            
        }catch(\Exception $e){
            return response()->json(['msg' => 'Error al ejecutar el metodo PDF', 'error'=>$e->getMessage()]);
        }
    }
}
