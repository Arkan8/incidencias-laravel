@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Nuevo mensaje</h1></div>

                <form method="POST" action="{{ action('UserController@enviarMensaje') }}">

                {{ csrf_field() }}
                
                <hr>
                    <div class="form-group row">
                        <label for="destino" class="col-md-4 col-form-label text-md-right">{{ __('Destinatario') }}</label>

                        <div class="col-md-6">
                            <select class="custom-select" id="destino" name="destino" required>
                            @foreach($usuarios as $usuario)
                                <option value="{{$usuario->user}}">{{$usuario->user}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="asunto" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>

                        <div class="col-md-6">
                            <input id="asunto" type="text" class="form-control" name="asunto" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mensaje" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                        <div class="col-md-6">
                            <textarea name="mensaje" id="mensaje" rows="7" style="resize: none; width: 100%;"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                            <div class="form-group row">
                                <div class="col-md-4"></div>

                                    <div class="btn-block col-md-4">
                                        <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                                        <a href="{{ action('UserController@mensajes') }}" class="btn btn-danger btn-block">Volver</a>
                                    </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>                
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('mensaje');
</script>
@endsection