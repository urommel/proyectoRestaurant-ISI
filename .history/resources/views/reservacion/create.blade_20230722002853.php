@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Reservacion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Reservacion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('reservacions.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">

                                    <div class="form-group">
                                        <input type="text" id="myInput" class="form-control" placeholder="Buscar">
                                        <div id="my-element" dc="{{ $clientes }}"></div>
                                        <a id="buscaCliente" href="#">BUSCAR</a>
                                        {{ Form::text('idCliente', $reservacion->idCliente, ['id' => 'idCliente', 'class' => 'form-control' . ($errors->has('idCliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
                                        <input type="text" id="dniCliente" class="form-control"
                                            placeholder="DNI Cliente">
                                        <br>
                                        <input type="text" id="nombreCliente" class="form-control"
                                            placeholder="Nombre Cliente">

                                    </div>

                                    {{ Form::label('Mesa a Reservar') }}
                                    <div class="form-group">
                                        <select name="clientes_id" class="form-control">
                                            @foreach ($mesas as $mesa)
                                                @if ($mesa['estado'] === 'Abierta')
                                                    <option value="{{ $mesa['idMesa'] }}">{{ $mesa['nombre'] }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
                                        {{ $mesaAbiertaFiltrada = $mesas->filter(function($mesax) {
                                            return $mesax['estado'] === 'Abierto';
                                        })->pluck('nombre','id')->toArray() }}
                                        {{ Form::label('idMesa') }}
                                        {{ Form::select('idMesa', $mesaAbiertaFiltrada , $reservacion->idMesa, ['class' => 'form-control' . ($errors->has('idMesa') ? ' is-invalid' : ''), 'placeholder' => 'Idmesa']) }}
                                        {!! $errors->first('idMesa', '<div class="invalid-feedback">:message</div>') !!}
                                    </div> --}}

                                    <div class="form-group">
                                        {{ Form::label('Fecha a Reservar') }}
                                        {{ Form::date('fechaReservacion', $reservacion->fechaReservacion, ['class' => 'form-control' . ($errors->has('fechaReservacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechareservacion']) }}
                                        {!! $errors->first('fechaReservacion', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('estado') }}
                                        {{ Form::text('estado', $reservacion->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                                        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
