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
                        {{-- <span class="card-title">{{ __('Show') }} Personal</span> --}}
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('personal.index') }}">{{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body">

                    <table class="table table-striped table-md">
                        <tr>
                            <th>Personal</th>
                            <th>Asistencia</th>
                            <th>Justificacion</th>
                            <th>Dia</th>
                            <th>Accion</th>
                        </tr>
                        @foreach ($asistencia as $asistenciaItem)
                            <tr>
                                <td>{{ $asistenciaItem->personal->apellidos }}</td>
                                <td>
                                    @if ($asistenciaItem->estado === 'asistio')
                                        Si asistio
                                    @elseif ($asistenciaItem->estado === 'no_asistio')
                                        NO asistio
                                    @elseif ($asistenciaItem->estado === 'tardanza')
                                        Tardanza de {{ $asistenciaItem->minutos }} minutos
                                    @endif
                                </td>
                                <td>
                                    @if (isset($asistenciaItem->justificacion))
                                        {{ $asistenciaItem->justificacion }}
                                    @else
                                        <p>No hay justificacion</p>
                                    @endif
                                </td>
                                <td>{{ $asistenciaItem->dia }}</td>


                                <td class="text-center">
                                    <form action="{{ route('asistencia.destroy', $asistenciaItem->id) }}"
                                        method="POST">
                                        <a class="btn btn-primary btn-sm m-1"
                                        href="{{ route('asistencia.edit', $asistenciaItem->id) }}"><i
                                            class="fa fa-fw fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm m-1"><i
                                                class="fa fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
