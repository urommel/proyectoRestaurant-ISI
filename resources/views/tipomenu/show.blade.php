@extends('layouts.app')

@section('template_title')
    {{ $tipomenu->name ?? "{{ __('Show') Tipomenu" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipomenu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipomenus.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtipomenu:</strong>
                            {{ $tipomenu->idTipoMenu }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $tipomenu->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tipomenu->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
