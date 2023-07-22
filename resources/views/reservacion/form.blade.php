<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idCliente') }}
            {{ Form::text('idCliente', $reservacion->idCliente, ['class' => 'form-control' . ($errors->has('idCliente') ? ' is-invalid' : ''), 'placeholder' => 'Idcliente']) }}
            {!! $errors->first('idCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMesa') }}
            {{ Form::text('idMesa', $reservacion->idMesa, ['class' => 'form-control' . ($errors->has('idMesa') ? ' is-invalid' : ''), 'placeholder' => 'Idmesa']) }}
            {!! $errors->first('idMesa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaAtencion') }}
            {{ Form::text('fechaAtencion', $reservacion->fechaAtencion, ['class' => 'form-control' . ($errors->has('fechaAtencion') ? ' is-invalid' : ''), 'placeholder' => 'Fechaatencion']) }}
            {!! $errors->first('fechaAtencion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaReservacion') }}
            {{ Form::text('fechaReservacion', $reservacion->fechaReservacion, ['class' => 'form-control' . ($errors->has('fechaReservacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechareservacion']) }}
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