@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" align=center><h1>Logs</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table table-striped">
                        <tr>
                            <td><b>ID</td>
                            <td><b>Descripción</td>
                            <td><b>ID del usuario</td>
                            <td><b>Fecha de creación</td>
                        </tr>

                        @foreach($logs as $log)
                            <tr>
                                <td>{{ $log->id }}</td>
                                <td>{{ $log->description }}</td>
                                <td>{{ $log->subject_id }}</td>
                                <td>{{ $log->created_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="align-self-center">
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
