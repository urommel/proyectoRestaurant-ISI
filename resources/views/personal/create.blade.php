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
                        {{-- <span class="card-title">{{ __('Create') }} Personal</span> --}}
                        <h3 class="font-bold m-2">{{ __('Crear') }} Personal</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('personal.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('personal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
