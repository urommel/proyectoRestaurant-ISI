@extends('layouts.app')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Horario</span>
                        </div> --}}
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personal.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <h2>Horario del personal: {{ $personal->user->name }}</h2>

                        <table class="table align-items-center table-flush">
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th>Hora</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($horarios as $horario)
                                    <tr>
                                        <td>{{ $horario->dia }}</td>
                                        <td>{{ $horario->hora_inicio }} - {{ $horario->hora_fin }}</td>
                                        <td >

                                            <!-- Botón para abrir el modal -->
                                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalEditarHorario">
                                                Editar Horario
                                            </button> --}}
                                            <form action="{{ route('horario.destroy', $horario->id) }}" method="POST">
                                                <a href="{{ route('horario.edit', $horario->id) }}"
                                                    class="btn btn-primary"><i
                                                    class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>




                        <!-- Modal de edición -->
                        {{-- <div class="modal fade" id="modalEditarHorario" tabindex="-1"
                            aria-labelledby="modalEditarHorarioLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditarHorarioLabel">Editar Horario</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Formulario de edición -->
                                        <form action="{{ route('horario.update', $horario->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <!-- Campos del formulario de edición -->
                                            <div class="mb-3">
                                                <label for="hora_inicio" class="form-label">Hora de inicio:</label>
                                                <input type="time" name="hora_inicio" value="{{ $horario->hora_inicio }}"
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="hora_fin" class="form-label">Hora de finalización:</label>
                                                <input type="time" name="hora_fin" value="{{ $horario->hora_fin }}"
                                                    class="form-control">
                                            </div>

                                            <!-- Otros campos del formulario -->

                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
