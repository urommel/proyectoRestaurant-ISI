@extends('layouts.app')

@section('template_title')
    {{ $plato->name ?? "{{ __('Show') Plato" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Plato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('platos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idplato:</strong>
                            {{ $plato->idPlato }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $plato->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $plato->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $plato->idCategoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
