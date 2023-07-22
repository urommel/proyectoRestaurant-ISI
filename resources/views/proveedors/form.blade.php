<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idProveedor') }}
            {{ Form::text('idProveedor', $proveedor->idProveedor, ['class' => 'form-control' . ($errors->has('idProveedor') ? ' is-invalid' : ''), 'placeholder' => 'Idproveedor']) }}
            {!! $errors->first('idProveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('compañia') }}
            {{ Form::text('compañia', $proveedor->compañia, ['class' => 'form-control' . ($errors->has('compañia') ? ' is-invalid' : ''), 'placeholder' => 'Compañia']) }}
            {!! $errors->first('compañia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('representante') }}
            {{ Form::text('representante', $proveedor->representante, ['class' => 'form-control' . ($errors->has('representante') ? ' is-invalid' : ''), 'placeholder' => 'Representante']) }}
            {!! $errors->first('representante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruc') }}
            {{ Form::text('ruc', $proveedor->ruc, ['class' => 'form-control' . ($errors->has('ruc') ? ' is-invalid' : ''), 'placeholder' => 'Ruc']) }}
            {!! $errors->first('ruc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $proveedor->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $proveedor->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $proveedor->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $proveedor->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>