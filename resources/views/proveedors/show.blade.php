@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? "{{ __('Show') Proveedor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idproveedor:</strong>
                            {{ $proveedor->idProveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Compañia:</strong>
                            {{ $proveedor->compañia }}
                        </div>
                        <div class="form-group">
                            <strong>Representante:</strong>
                            {{ $proveedor->representante }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $proveedor->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $proveedor->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedor->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $proveedor->email }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $proveedor->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
