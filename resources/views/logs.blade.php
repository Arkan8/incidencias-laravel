@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Incidencias</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table table-striped">
                        <tr>
                            <td><b>ID</td>
                            <td><b>ID del usuario</td>
                            <td><b>Asunto</td>
                            <td><b>Descripción</td>
                            <td><b>Fecha de creación</td>
                            <td><b>Tipo</td>
                            <td><b>Aula</td>
                            <td><b>Acciones</td>
                        </tr>

                        @foreach($incidencias as $incidencia)
                            <tr>
                                <td>{{ $incidencia->id }}</td>
                                <td>{{ $incidencia->id_usuario }}</td>
                                <td>{{ $incidencia->asunto }}</td>
                                <td>{{ $incidencia->descripcion }}</td>
                                <td>{{ $incidencia->fechacreacion }}</td>
                                <td>{{ $incidencia->tipo }}</td>
                                <td>{{ $incidencia->aula }}</td>
                                <td>
                                <a data-asunto="{{ $incidencia->asunto }}" data-descripcion="{{ $incidencia->descripcion }}" data-aula="{{ $incidencia->aula }}" data-toggle="modal" data-target="#modalEditar" href="{{ url('/editar', $incidencia->id) }}" class="btn btn-info" name="btn-editar" style="color: white">Editar</a>
                                <a href="eliminar/{{ $incidencia->id }}" onclick="return confirm('¿Seguro que desea borrar la incidencia {{ $incidencia->id }}?')" class="btn btn-danger" style="color: white">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="align-self-center">
                    {{ $incidencias->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
