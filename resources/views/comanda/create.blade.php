@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Comanda
@endsection

@section('content')
{{date_default_timezone_set('America/Lima')}}
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Comanda</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comandas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('comanda.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
