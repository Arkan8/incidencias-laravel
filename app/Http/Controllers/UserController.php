<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


use Auth;

class UserController extends Controller
{
    public function incidencias(){

        $incidencias = DB::table('incidencias')->paginate(5);

        return view('incidencias', [
            'incidencias' => $incidencias
        ]);
    }

    public function guardar(Request $request){

        $id_usuario = Auth::id();

        $incidencia = DB::table('incidencias')->insert(array(
            'id' => null,
            'id_usuario' => $id_usuario,
            'asunto' => $request->input('asunto'),
            'descripcion' => $request->input('descripcion'),
            'fechacreacion' => date('Y-m-d H:i:s'),
            'tipo' => $request->input('tipo'),
            'aula' => $request->input('aula')
        ));

        return redirect()->action('UserController@incidencias');
    }

    public function eliminar($id){
        $incidencia = DB::table('incidencias')->where('id', $id)->delete();

        return redirect()->action('UserController@incidencias')->with('status', 'Incidencia eliminada correctamente');
    }

    public function editar($id){
        $editarIncidencia = DB::table('incidencias')->where('id', $id)->first();
        $incidencias = DB::table('incidencias')->paginate(5);

        return view('incidencias', [
            'editarIncidencia' => $editarIncidencia,
            'incidencias' => $incidencias
        ]);
    }
}
