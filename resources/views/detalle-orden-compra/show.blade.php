@extends('layouts.app')

@section('template_title')
    {{ $detalleOrdenCompra->name ?? "{{ __('Show') Detalle Orden Compra" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Orden Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-orden-compras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleOrdenCompra->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Idorden:</strong>
                            {{ $detalleOrdenCompra->idOrden }}
                        </div>
                        <div class="form-group">
                            <strong>idproducto:</strong>
                            {{ $detalleOrdenCompra->idproducto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
