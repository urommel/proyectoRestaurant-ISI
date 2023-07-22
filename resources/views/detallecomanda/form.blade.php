<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idComanda') }}
            {{ Form::text('idComanda', $idComanda, ['class' => 'form-control' . ($errors->has('idComanda') ? ' is-invalid' : ''), 'placeholder' => $idComanda, 'readonly' => 'readonly']) }}
            {!! $errors->first('idComanda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPlato') }}
            {{ Form::text('idPlato', $detallecomanda->idPlato, ['class' => 'form-control' . ($errors->has('idPlato') ? ' is-invalid' : ''), 'placeholder' => 'Idplato']) }}
            {!! $errors->first('idPlato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $detallecomanda->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detallecomanda->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>