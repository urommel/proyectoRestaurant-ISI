@extends('layouts.app')

@section('template_title')
    {{ $reservacion->name ?? "{{ __('Show') Reservacion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservacions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcliente:</strong>
                            {{ $reservacion->idCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Idmesa:</strong>
                            {{ $reservacion->idMesa }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaatencion:</strong>
                            {{ $reservacion->fechaAtencion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechareservacion:</strong>
                            {{ $reservacion->fechaReservacion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $reservacion->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
