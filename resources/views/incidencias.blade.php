@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Incidencias</h1></div>

                <button class="btn" data-toggle="modal" data-target="#dialogo" style="box-shadow: 0px 0px 1.5px black">Nueva incidencia</button>
                <!-- MODAL PARA NUEVA INCIDENCIA -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                                        <!-- ///////////////// Modal de crear ///////////////// -->

                                        <div class="modal fade" id="dialogo" role="dialog">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">

                    <h4 class="modal-title"> Nueva incidencia </h4>
                
                    <button type="button" class="btn btn-danger m-t-10" data-dismiss="modal"> X</button>

                    </div>
                    <div class="modal-body">
                        <form action="{{ action('UserController@guardar') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="asunto" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>

                                <div class="col-md-6">
                                    <input id="asunto" type="text" class="form-control" name="asunto" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                <div class="col-md-6">
                                    <textarea name="descripcion" id="descripcion" rows="7" style="resize: none; width: 100%;"></textarea>
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
                                    <input id="aula" type="text" class="form-control" name="aula" required>
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

                    <!-- ///////////////// Fin de función de crear ///////////////// -->
                    <!-- ///////////////// Modal de editar ///////////////// -->

                    <div class="modal fade" id="modalEditar" role="dialog">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">

                    <h4 class="modal-title"> Editar incidencia </h4>
                                
                    <button type="button" class="btn btn-danger m-t-10" data-dismiss="modal"> X</button>

                    </div>
                    <div class="modal-body">
                        <form action="{{ action('UserController@actualizar') }}" method="POST">
                            {{ csrf_field() }}
                            <!-- @foreach($incidencias as $incidencia) -->
                                <input type="hidden" name="id" value="{{ $incidencia->id }}" />
                            <!-- @endforeach -->

                            <div class="form-group row">
                                <label for="asuntoEditar" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>

                                <div class="col-md-6">
                                    <input id="asuntoEditar" type="text" class="form-control" name="asuntoEditar" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descripcionEditar" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                <div class="col-md-6">
                                    <textarea name="descripcionEditar" id="descripcionEditar" rows="7" style="resize: none; width: 100%;"></textarea>
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
                                <label for="aulaEditar" class="col-md-4 col-form-label text-md-right">{{ __('Aula') }}</label>

                                <div class="col-md-6">
                                    <input id="aulaEditar" type="text" class="form-control" name="aulaEditar" required>
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

                    <!-- ///////////////// Fin de función de editar ///////////////// -->

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
