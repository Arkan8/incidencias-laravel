@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Mensajes</h1></div>

                <a href="mensaje-nuevo" class="btn">Nuevo mensaje </a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($mensajes as $mensaje)
                    
                    <div class="panel">
                        <a href="#" data-toggle="collapse" data-target="#d{{ $mensaje->id }}">
                            <h4>✉ {{$mensaje->asunto}}</h4>
                        </a>
                        <div class="collapse panel-body" id="d{{ $mensaje->id }}">{{$mensaje->mensaje}}</div>
                    </div>
                    <hr>

                    @endforeach


                    <!-- <script>
                        CKEDITOR.replace('summary-ckeditor');
                    </script> -->
        </div>
    </div>
</div>
@endsection
