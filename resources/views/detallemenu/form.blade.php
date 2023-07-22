<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idDetalleMenu') }}
            {{ Form::text('idDetalleMenu', $detallemenu->idDetalleMenu, ['class' => 'form-control' . ($errors->has('idDetalleMenu') ? ' is-invalid' : ''), 'placeholder' => 'Iddetallemenu']) }}
            {!! $errors->first('idDetalleMenu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMenu') }}
            {{ Form::text('idMenu', $detallemenu->idMenu, ['class' => 'form-control' . ($errors->has('idMenu') ? ' is-invalid' : ''), 'placeholder' => 'Idmenu']) }}
            {!! $errors->first('idMenu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPlato') }}
            {{ Form::text('idPlato', $detallemenu->idPlato, ['class' => 'form-control' . ($errors->has('idPlato') ? ' is-invalid' : ''), 'placeholder' => 'Idplato']) }}
            {!! $errors->first('idPlato', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>