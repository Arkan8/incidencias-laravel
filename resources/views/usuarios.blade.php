@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Usuarios</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table table-striped">
                        <tr>
                            <td><b>Usuario</td>
                            <td><b>Email</td>
                            <td><b>Rol</td>
                            <td><b>Departamento</td>
                            <td><b>Fecha de creación</td>
                            <td><b>Acciones</td>
                        </tr>

                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->user }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->rol }}</td>
                                <td>{{ $usuario->departamento }}</td>
                                <td>{{ $usuario->created_at }}</td>
                                <td>
                                <a href="{{ url('/editar', $usuario->id) }}" class="btn btn-info" name="btn-editar" style="color: white">Editar</a>
                                <a href="eliminar/{{ $usuario->id }}" onclick="return confirm('¿Seguro que desea borrar la usuario {{ $usuario->id }}?')" class="btn btn-danger" style="color: white">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="align-self-center">
                    {{ $usuarios->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
