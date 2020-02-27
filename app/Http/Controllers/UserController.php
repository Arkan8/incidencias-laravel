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
}
