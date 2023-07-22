@extends('layouts.app')

@section('template_title')
    {{ $detallemenu->name ?? "{{ __('Show') Detallemenu" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detallemenu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detallemenus.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddetallemenu:</strong>
                            {{ $detallemenu->idDetalleMenu }}
                        </div>
                        <div class="form-group">
                            <strong>Idmenu:</strong>
                            {{ $detallemenu->idMenu }}
                        </div>
                        <div class="form-group">
                            <strong>Idplato:</strong>
                            {{ $detallemenu->idPlato }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
