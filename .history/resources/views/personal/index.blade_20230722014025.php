@extends('layouts.app')

@section('template_title')
    Personal
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            {{-- <span id="card_title">
                                    {{ __('Personal') }}
                                </span> --}}

                            <h3 class="font-bold m-3">Personal</h3>

                            <div class="float-right">
                                <a href="{{ route('personal.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear Nuevo') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Nº</th>

                                        <th>Dni</th>
                                        <th>Personal</th>
                                        <th></th>
                                        {{-- <th>Correo</th>
                                        <th>Celular</th> --}}
                                        {{-- <th>Direccion</th>
                                        <th>Ciudad</th> --}}
                                        <th>Rol</th>
                                        <th>Horario</th>
                                        <th>Asistencia</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personals as $personal)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $personal->DNI }}</td>
                                            <td>{{ $personal->apellidos }} {{ $personal->user()->first()->name }}</td>
                                            <td></td>
                                            {{-- <td>{{ $personal->user()->first()->email }}</td>
                                            <td>{{ $personal->telefono }}</td> --}}
                                            {{-- <td>{{ $personal->direccion }}</td>
                                            <td>{{ $personal->ciudad }}</td> --}}
                                            <td>
                                                <h5><span
                                                        class="badge badge-dark">{{ $personal->user()->first()->roles()->first()->name }}</span>
                                                </h5>
                                            </td>

                                            {{-- Horario --}}
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-success m-1"
                                                    href="{{ route('horario.create', ['id' => $personal->id]) }}"><i
                                                        class="fas fa-user-clock p-1"></i>
                                                </a>
                                                @if (isset($horarios) && $horarios->isNotEmpty() && isset($horarios->first()->personal_id))
                                                    <a class="btn btn-sm btn-success m-1"
                                                        href="{{ route('horario.show', $horarios->first()->personal_id) }}"><i
                                                            class="fas fa-clock p-1"></i>
                                                    </a>
                                                @endif
                                            </td>

                                            {{-- Asistencia --}}
                                            {{-- <td class="text-center">
                                                @if (!isset($asistencias) || $asistencias->isEmpty() || !isset($asistencias->first()->personal_id))
                                                    <a class="btn btn-sm btn-success m-1"
                                                        href="{{ route('asistencia.create', ['id' => $personal->id]) }}"><i
                                                            class="fas fa-vote-yea p-1"></i></a>
                                                @endif
                                                @if (isset($asistencias) && $asistencias->isNotEmpty() && isset($asistencias->first()->personal_id))
                                                    <a class="btn btn-sm btn-success m-1"
                                                        href="{{ route('asistencia.show', $asistencias->first()->personal_id) }}"><i
                                                            class="fas fa-th-list p-1"></i>
                                                @endif
                                            </td> --}}

                                            

                                            <td class="text-center">
                                                <form action="{{ route('personal.destroy', $personal->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary m-1"
                                                        href="{{ route('personal.show', $personal->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i>
                                                        {{-- {{ __('Show') }} --}}
                                                    </a>
                                                    <a class="btn btn-sm btn-success m-1"
                                                        href="{{ route('personal.edit', $personal->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i>
                                                        {{-- {{ __('Edit') }} --}}
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm m-1"><i
                                                            class="fa fa-fw fa-trash"></i>
                                                        {{-- {{ __('Delete') }} --}}
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $personals->links() !!}
            </div>
        </div>
    </div>
@endsection
