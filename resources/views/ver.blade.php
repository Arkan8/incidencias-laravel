@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Detalle del usuario {{ $usuario->id }}</h1></div>
                
                <table class="table table-striped">
                        <tr>
                            <td><b>Usuario</td>
                            <td><b>Email</td>
                            <td><b>Rol</td>
                            <td><b>Departamento</td>
                            <td><b>Fecha de creación</td>
                            <td></td>
                        </tr>

                        
                            <tr>
                                <td>{{ $usuario->user }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->rol }}</td>
                                <td>{{ $usuario->departamento }}</td>
                                <td>{{ $usuario->created_at }}</td>
                                <td><a href="{{ action('UserController@usuarios') }}" class="btn btn-info" style="color: white">Volver</td>
                            </tr>
                    </table>


            </div>
        </div>
    </div>
</div>
@endsection