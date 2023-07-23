<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalleOrdenCompra->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idOrden') }}
            {{ Form::text('idOrden', $detalleOrdenCompra->idOrden, ['class' => 'form-control' . ($errors->has('idOrden') ? ' is-invalid' : ''), 'placeholder' => 'Idorden' ,'readonly']) }}
            {!! $errors->first('idOrden', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idproducto') }}
            {{ Form::text('idproducto', $detalleOrdenCompra->idproducto, ['class' => 'form-control' . ($errors->has('idproducto') ? ' is-invalid' : ''), 'placeholder' => 'idproducto','readonly']) }}
            {!! $errors->first('idproducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>