@extends('layouts.app')

@section('template_title')
    {{-- {{ $personal->name ?? "{{ __('Show') Personal" }} --}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personal.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $personal->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $personal->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $personal->user()->first()->name  }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $personal->user()->first()->email }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $personal->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $personal->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $personal->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $personal->user()->first()->roles()->first()->name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
