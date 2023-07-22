<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idComanda') }}
            {{ Form::text('idComanda', $detalleproducto->idComanda, ['class' => 'form-control' . ($errors->has('idComanda') ? ' is-invalid' : ''), 'placeholder' => 'Idcomanda']) }}
            {!! $errors->first('idComanda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idProducto') }}
            {{ Form::text('idProducto', $detalleproducto->idProducto, ['class' => 'form-control' . ($errors->has('idProducto') ? ' is-invalid' : ''), 'placeholder' => 'Idproducto']) }}
            {!! $errors->first('idProducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $detalleproducto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalleproducto->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>