@extends('layouts.app')

@section('content')
    <button class="btn" data-toggle="modal" data-target="#dialogo" style="box-shadow: 0px 0px 1.5px black">Nueva incidencia</button>
    <!-- MODAL PARA NUEVA INCIDENCIA -->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!-- ///////////////// Función de crear y editar ///////////////// -->

    <div class="modal fade" id="dialogo" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">

    
    <h4 class="modal-title"> Editar incidencia </h4>

    <button type="button" class="btn btn-danger m-t-10" data-dismiss="modal"> X</button>

    </div>
    <div class="modal-body">
        <form action="{{ action('UserController@guardar') }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="asunto" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>

                <div class="col-md-6">
                    <input id="asunto" type="text" class="form-control" name="asunto" value="{{ $editarIncidencia->asunto or '' }}"  required>
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                <div class="col-md-6">
                    <textarea name="descripcion" id="descripcion" value="{{ $editarIncidencia->descripcion or '' }}" rows="7" style="resize: none; width: 100%;"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                <div class="col-md-6">
                    <select class="custom-select" id="tipo" name="tipo">
                        <option value="urgente" selected>Urgente</option>
                        <option value="importante">Importante</option>
                        <option value="leve">Leve</option>
                        </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="aula" class="col-md-4 col-form-label text-md-right">{{ __('Aula') }}</label>

                <div class="col-md-6">
                    <input id="aula" type="text" value="{{ $editarIncidencia->aula or '' }}" class="form-control" name="aula" required>
                </div>
            </div>
        <hr>
        <div class="container">
            <div class="form-group row">
                <div class="col-md-1"></div>

                    <div class="btn-block align-content-center col-md-10">
                        <input type="submit" value="Guardar" class="btn btn-primary btn-block">
                    </div>

                <div class="col-md-1"></div>
            </div>
        </div>


        </form>
    </div>

    <div class="modal-footer">
    </div>
    </div>
    </div>
    </div>

    <!-- ///////////////// Fin de función de crear y editar ///////////////// -->

                
@endsection