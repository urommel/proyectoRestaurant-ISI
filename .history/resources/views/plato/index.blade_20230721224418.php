@extends('layouts.app')

@section('template_title')
    Plato
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Plato') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('platos.create') }}" class="btn btn-primary btn-sm float-right"
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Idcategoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($platos as $plato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $plato->nombre }}</td>
                                            <td>{{ $plato->precio }}</td>
                                            <td>{{ $plato->categoria->categoria }}</td>

                                            <td>
                                                <form action="{{ route('platos.destroy', $plato->plato_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('platos.show', $plato->plato_id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('platos.edit', $plato->idPlato) }}"><i
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
                {!! $platos->links() !!}
            </div>
        </div>
    </div>
@endsection
