<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdProveedor') }}
            {{ Form::text('IdProveedor', $ordenCompra->IdProveedor, ['class' => 'form-control' . ($errors->has('IdProveedor') ? ' is-invalid' : ''), 'placeholder' => 'Idproveedor']) }}
            {!! $errors->first('IdProveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $ordenCompra->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $ordenCompra->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $ordenCompra->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('personal_id') }}
            {{ Form::text('personal_id', $ordenCompra->personal_id, ['class' => 'form-control' . ($errors->has('personal_id') ? ' is-invalid' : ''), 'placeholder' => 'personal_id']) }}
            {!! $errors->first('personal_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>