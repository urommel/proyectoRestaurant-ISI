@extends('layouts.app')

@section('template_title')
    {{ $detalleproducto->name ?? "{{ __('Show') Detalleproducto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalleproducto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalleproductos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcomanda:</strong>
                            {{ $detalleproducto->idComanda }}
                        </div>
                        <div class="form-group">
                            <strong>Idproducto:</strong>
                            {{ $detalleproducto->idProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $detalleproducto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleproducto->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
