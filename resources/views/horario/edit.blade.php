@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Horario
@endsection



@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <style>
                    .formulario-edicion {
                        background-color: #f8f8f8;
                        padding: 20px;
                        border: 1px solid #ccc;
                        border-radius: 8px;
                        width: 400px;
                        margin: 0 auto;
                    }

                    .formulario-edicion label {
                        font-weight: bold;
                        margin-bottom: 8px;
                        display: block;
                    }

                    .formulario-edicion input[type="time"] {
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        width: 100%;
                        margin-bottom: 15px;
                        font-size: 16px;
                    }

                    .formulario-edicion button {
                        padding: 10px 20px;
                        background-color: #4CAF50;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        font-size: 16px;
                        cursor: pointer;
                    }

                    .formulario-edicion button:hover {
                        background-color: #45a049;
                    }
                </style>

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Horario</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('horario.update', $horario->id) }}" method="POST" class="formulario-edicion">
                            @csrf
                            @method('PUT')

                            <!-- Campo oculto para el día -->
                            <input type="hidden" name="dia" value="{{ $horario->dia }}">

                            {{-- <!-- Checkbox "Trabaja" -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="trabaja" id="checkbox-trabaja"
                                    value="1" {{ $horario->trabaja ? 'checked' : '' }}>
                                <label class="form-check-label" for="checkbox-trabaja">
                                    Trabaja
                                </label>
                            </div> --}}

                            <!-- Campos del formulario de edición -->
                            <div>
                                <label for="hora_inicio">Hora de inicio:</label>
                                <input type="time" name="hora_inicio" value="{{ $horario->hora_inicio }}"
                                    class="input-edicion">
                            </div>

                            <div>
                                <label for="hora_fin">Hora de finalización:</label>
                                <input type="time" name="hora_fin" value="{{ $horario->hora_fin }}"
                                    class="input-edicion">
                            </div>

                            <!-- Otros campos del formulario -->

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>

                        {{-- <a href="{{ route('horario.show', ['id' => $horario->id]) }}">Volver</a> --}}


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
