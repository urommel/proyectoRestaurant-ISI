@extends('layouts.app')

@section('template_title')
    {{ $menu->name ?? "{{ __('Show') Menu" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Menu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('menus.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idmenu:</strong>
                            {{ $menu->idMenu }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $menu->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $menu->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipomenu:</strong>
                            {{ $menu->idTipoMenu }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
