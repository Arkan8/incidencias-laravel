@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Detalle de incidencia {{ $incidencia->id }}</h1></div>
                
                <table class="table table-striped">
                        <tr>
                            <td><b>ID</td>
                            <td><b>ID del usuario</td>
                            <td><b>Asunto</td>
                            <td><b>Descripción</td>
                            <td><b>Fecha de creación</td>
                            <td><b>Tipo</td>
                            <td><b>Aula</td>
                            <td></td>
                        </tr>

                        
                            <tr>
                                <td>{{ $incidencia->id }}</td>
                                <td>{{ $incidencia->id_usuario }}</td>
                                <td>{{ $incidencia->asunto }}</td>
                                <td>{{ $incidencia->descripcion }}</td>
                                <td>{{ $incidencia->fechacreacion }}</td>
                                <td>{{ $incidencia->tipo }}</td>
                                <td>{{ $incidencia->aula }}</td>
                                <td><a href="{{ action('UserController@incidencias') }}" class="btn btn-info" style="color: white">Volver</td>
                            </tr>
                    </table>


            </div>
        </div>
    </div>
</div>
@endsection