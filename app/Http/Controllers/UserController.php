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
            'incidencias' => $incidencias,
        ]);
    }

    public function usuarios(){

        $usuarios = DB::table('users')->paginate(5);

        return view('usuarios', [
            'usuarios' => $usuarios,
        ]);
    }

    public function mensajes(){

        $mensajes = DB::table('inbox')->where('user_id', Auth::User()->id)->paginate(10);

        return view('mensajes', [
            'mensajes' => $mensajes
        ]);
    }

    public function logs(){
        $logs = DB::table('activity_log')->orderBy('id', 'desc')->paginate(5);

        return view('logs', [
            'logs' => $logs
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

    public function detalle($id){
        $incidencia = DB::table('incidencias')->where('id', $id)->first();

        return view('detalle', [
            'incidencia' => $incidencia,
        ]);
    }

    public function ver($id){
        $usuario = DB::table('users')->where('id', $id)->first();

        return view('ver', [
            'usuario' => $usuario,
        ]);
    }

    public function eliminar($id){
        $incidencia = DB::table('incidencias')->where('id', $id)->delete();

        return redirect()->action('UserController@incidencias')->with('status', 'Incidencia eliminada correctamente');
    }

    public function eliminarUser($id){
        $usuario = DB::table('users')->where('id', $id)->delete();

        return redirect()->action('UserController@usuarios')->with('status', 'Usuario eliminado correctamente');
    }

    public function editar($id){
        $editarIncidencia = DB::table('incidencias')->where('id', $id)->first();

        return view('incidencias', [
            'editarIncidencia' => $editarIncidencia,
        ]);
    }

    public function editarUser($id){
        $editarUser = DB::table('users')->where('id', $id)->first();

        return view('editarUser', [
            'editarUser' => $editarUser,
        ]);
    }

    public function actualizar(Request $request){
        $id = $request->input('id');
        $incidenciaEditada = DB::table('incidencias')->where('id', $id)
                                                    ->update(array(
                                                        'asunto' => $request->input('asuntoEditar'),
                                                        'descripcion' => $request->input('descripcionEditar'),
                                                        'tipo' => $request->input('tipo'),
                                                        'aula' => $request->input('aulaEditar'),
                                                    ));
        return redirect()->action('UserController@incidencias')->with('status', 'Incidencia editada correctamente');
    }

    public function actualizarUser(Request $request){
        $id = $request->input('id');
        $userEditado = DB::table('users')->where('id', $id)
                                                    ->update(array(
                                                        'user' => $request->input('user'),
                                                        'email' => $request->input('email'),
                                                        'rol' => $request->input('rol'),
                                                        'departamento' => $request->input('departamento'),
                                                    ));
        return redirect()->action('UserController@usuarios')->with('status', 'Usuario editado correctamente');
    }
}
