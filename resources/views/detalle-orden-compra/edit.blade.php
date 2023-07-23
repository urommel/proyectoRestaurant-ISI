@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Detalle Orden Compra
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Detalle Orden Compra</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('detalle-orden-compras.update',[$detalleOrdenCompra->idOrden]) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        {{ Form::label('cantidad') }}
                                        {{ Form::text('cantidad', $det->first("cantidad")->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
                                        {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('cantidadA') }}
                                        {{ Form::hidden('cantidadA', $det->first("cantidad")->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
                                        {!! $errors->first('cantidadA', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('idOrden') }}
                                        {{ Form::text('idOrden', $detalleOrdenCompra->idOrden, ['class' => 'form-control' . ($errors->has('idOrden') ? ' is-invalid' : ''), 'placeholder' => 'Idorden' ,'readonly']) }}
                                        {!! $errors->first('idOrden', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('idproducto') }}
                                        {{ Form::text('idproducto', $det->first("idproducto")->idproducto, ['class' => 'form-control' . ($errors->has('idproducto') ? ' is-invalid' : ''), 'placeholder' => 'idproducto','readonly']) }}
                                        {!! $errors->first('idproducto', '<div class="invalid-feedback">:message</div>') !!}
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
