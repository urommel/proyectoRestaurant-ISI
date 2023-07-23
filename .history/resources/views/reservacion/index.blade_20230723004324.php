@extends('layouts.app')

@section('template_title')
    Reservacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: right;">

                            <span id="card_title">
                                Lista de Reservaciones
                            </span>

                            <div class="float-right">
                                <a style="margin: 0px 10px;" href="{{ route('reservacions.create') }}"
                                    class="btn btn-primary btn-sm float-right" data-placement="left">
                                    Nueva Reservación
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
                                        <th>No</th>

                                        <th>Nombre CLiente</th>
                                        <th>Mesa</th>
                                        <th>Fechaatencion</th>
                                        <th>Fecha Reserva</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservacions as $reservacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $reservacion->cliente->Apellido }} {{ $reservacion->cliente->Nombre }}
                                            </td>
                                            <td>{{ $reservacion->idMesa-> }}</td>
                                            <td>{{ $reservacion->created_at }}</td>
                                            <td>{{ $reservacion->fechaReservacion }}</td>
                                            <td>{{ $reservacion->estado }}</td>

                                            <td>
                                                <form action="{{ route('reservacions.destroy', [$reservacion->id]) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('reservacions.show', $reservacion->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('reservacions.edit', $reservacion->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reservacions->links() !!}
            </div>
        </div>
    </div>
@endsection
