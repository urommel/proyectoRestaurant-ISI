
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('idMesa') }}
            {{ Form::text('idMesa', $comanda->idMesa, ['class' => 'form-control' . ($errors->has('idMesa') ? ' is-invalid' : ''), 'placeholder' => 'Idmesa']) }}
            {!! $errors->first('idMesa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $comanda->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', date('Y-m-d'), ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''),'pattern' => '\d{4}-\d{2}-\d{2}' ,'readonly' => 'readonly']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $comanda->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>