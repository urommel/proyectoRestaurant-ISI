<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group col-md-6">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $mesa->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $mesa->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group col-md-6">
            <label>Estado</label>
            <select class="form-control" name="ciudad">
                @foreach ($mesa->getEstadoMesas() as $key => $value)
                    <option value="{{ $key }}" {{ $mesa->estado == $value ? 'selected' : '' }}>
                        {{ $value }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
