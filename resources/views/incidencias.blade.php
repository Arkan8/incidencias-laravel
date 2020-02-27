@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Incidencias</h1></div>
                <button class="btn">Nueva incidencia</button>

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
                        </tr>

                        @foreach($incidencias as incidencia)
                            <tr>
                                <td>{{ $incidencias->id }}</td>
                                <td>{{ $incidencias->id_usuario }}</td>
                                <td>{{ $incidencias->asunto }}</td>
                                <td>{{ $incidencias->descripcion }}</td>
                                <td>{{ $incidencias->fechacreacion }}</td>
                                <td>{{ $incidencias->tipo }}</td>
                                <td>{{ $incidencias->aula }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection