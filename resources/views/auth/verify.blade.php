@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu dirección de correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un correo a su dirección email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor verifique su correo.') }}
                    {{ __('Si no ha recibido el correo') }}, <a href="{{ route('verification.resend') }}">{{ __('haga clic aquí para volverlo a intentar') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
