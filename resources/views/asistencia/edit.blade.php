@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Personal
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header d-flex justify-content-between">
                        <span class="card-title">{{ __('Actualizar') }} Asistencia</span>
                        <a class="btn btn-primary" href="{{ route('asistencia.show', $asistencia->first()->personal_id) }}">{{ __('Regresar') }}</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asistencia.update', $asistencia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('asistencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
