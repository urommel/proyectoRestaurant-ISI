@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Personal
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="font-bold m-2">{{ __('Crear') }} Asistencia</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asistencia.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('asistencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
