@extends('layouts.app')

@section('template_title')
    {{ $detallecomanda->name ?? "{{ __('Show') Detallecomanda" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detallecomanda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detallecomandas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcomanda:</strong>
                            {{ $detallecomanda->idComanda }}
                        </div>
                        <div class="form-group">
                            <strong>Idplato:</strong>
                            {{ $detallecomanda->idPlato }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $detallecomanda->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detallecomanda->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
