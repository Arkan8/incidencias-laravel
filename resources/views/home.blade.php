@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row" style="height: 40vh;">
                        <div class="col-md-6 btn d-flex justify-content-center">

                            <a id="letrasInicio" class="align-self-center" href="/incidencias">
                            <img src="images\incidencias.png" class="w-50 align-self-center img-fluid"><hr>
                            Incidencias
                            </a>
                        </div>

                        <div class="col-md-6 btn d-flex justify-content-center">
                            <a id="letrasInicio" class="align-self-center" href="/mensajes">
                            <img src="images\mensajes.png" class="w-50 align-self-center img-fluid"><hr>
                            Mensajes
                            </a>
                        </div>
                    </div>

                    <div class="row" style="height: 40vh;">
                        <div class="col-md-6 btn d-flex justify-content-center">
                            <a id="letrasInicio" class="align-self-center" href="/logs">
                            <img src="images\logs.png" class="w-50 align-self-center img-fluid"><hr>
                            Logs
                            </a>
                        </div>

                        <div class="col-md-6 btn d-flex justify-content-center">
                            <a id="letrasInicio" class="align-self-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            if(window.confirm('¿Seguro que quiere cerrar sesión?')){
                                document.getElementById('logout-form').submit();
                            }">

                            <img src="images\sesion.png" class="w-50 align-self-center img-fluid"><hr>
                            Cerrar sesión
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
