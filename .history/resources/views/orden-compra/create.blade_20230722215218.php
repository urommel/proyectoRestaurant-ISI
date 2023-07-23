@extends('layouts.app')

@section('template_title')
    Detalle Orden Compra
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Orden Compra') }}
                            </span>

                            <div class="float-right">

                                <a href="{{ route('detalle-orden-compras.create2', $id) }}"
                                    class="btn btn-primary btn-sm float-right" data-placement="left">
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


                                        <th>Cantidad</th>
                                        <th>Idorden</th>
                                        <th>idproducto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleOrdenCompras as $detalleOrdenCompra)
                                        <tr>


                                            <td>{{ $detalleOrdenCompra->idOrden }}</td>
                                            <td>{{ $detalleOrdenCompra->idOrden }}</td>
                                            <td>{{ $detalleOrdenCompra->idproducto }}</td>

                                            <td>
                                                <form
                                                    action="{{ route('detalle-orden-compras.destroy', $detalleOrdenCompra->idOrden) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('detalle-orden-compras.show', $detalleOrdenCompra->idOrden) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('detalle-orden-compras.edit', $detalleOrdenCompra->idOrden) }}"><i
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

            </div>
        </div>
    </div>
@endsection
