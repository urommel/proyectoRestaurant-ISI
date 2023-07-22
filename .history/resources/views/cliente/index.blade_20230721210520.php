@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
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
                        <span id="card_title">
                            Clientes Naturales
                        </span>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Documento</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        @if ($cliente->tipocliente->nombre == 'Natural'&& $cliente->has('nombre'))
                                            <tr>
                                                <td>{{ $cliente->id }}</td>
                                                {{--
											<td>{{ $cliente->tipocliente->nombre }}</td> --}}
                                                <td>{{ $cliente->documento }}</td>
                                                <td>{{ $cliente->Nombre }}</td>
                                                <td>{{ $cliente->Apellido }}</td>
                                                <td>
                                                    <form action="{{ route('clientes.destroy', $cliente->id) }}"
                                                        method="POST">
                                                        <a class="btn btn-sm btn-primary "
                                                            href="{{ route('clientes.show', $cliente->id) }}"><i
                                                                class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('clientes.edit', $cliente->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <span id="card_title">
                            Clientes Juridicos
                        </span>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>RUC</th>
                                        <th>Representante</th>
                                        <th>Razon Social</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        @if ($cliente->tipocliente->nombre == 'Juridica')
                                            <tr>
                                                <td>{{ $cliente->id }}</td>

                                                {{-- <td>{{ $cliente->tipocliente->nombre }}</td> --}}
                                                <td>{{ $cliente->documento }}</td>
                                                <td>{{ $cliente->Nombre }}</td>
                                                <td>{{ $cliente->Apellido }}</td>

                                                <td>
                                                    <form action="{{ route('clientes.destroy', $cliente->id) }}"
                                                        method="POST">
                                                        <a class="btn btn-sm btn-primary "
                                                            href="{{ route('clientes.show', $cliente->id) }}"><i
                                                                class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('clientes.edit', $cliente->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
