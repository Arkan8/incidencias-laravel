@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Edición del usuario {{ $editarUser->user }}</h1></div>

                <form action="{{ action('UserController@actualizarUser') }}" method="POST">
                    {{ csrf_field() }}
                <hr>
                    <input type="hidden" name="id" value="{{ $editarUser->id }}" />

                    <div class="form-group row">
                        <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>

                        <div class="col-md-6">
                            <input id="user" type="text" class="form-control" name="user" value="{{$editarUser->user}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de correo') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control" name="email" value="{{$editarUser->email}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                        <div class="col-md-6">
                            <input id="rol" type="text" class="form-control" name="rol" value="{{$editarUser->rol}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>
                        <div class="col-md-6">
                        <select id="departamento" type="departamento" class="custom-select form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" value="{{$editarUser->departamento}}">
                                <option value="otro" selected>Otro...</option>
                                <option value="informatica">Informática</option>
                                <option value="administracion">Administración</option>
                                <option value="comercio">Comercio</option>
                                <option value="turismo">Turismo</option>
                                </select>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                            <div class="form-group row">
                                <div class="col-md-3"></div>

                                    <div class="btn-block align-content-center col-md-6">
                                        <input type="submit" value="Guardar" class="btn btn-primary btn-block">
                                    </div>

                                <div class="col-md-3"></div>
                            </div>
                        </div>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection