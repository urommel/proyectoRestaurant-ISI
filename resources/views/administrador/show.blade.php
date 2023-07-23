@extends('layouts.app')

@section('template_title')
    {{ $ordenCompra->name ?? "{{ __('Show') Orden Compra" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Orden Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administradors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" role="form" enctype="multipart/form-data"
                            action="{{ route('administradors.update', [$ordenCompra->idOrden]) }}">
                            {{ method_field('PATCH') }}
                            @csrf
                            <div>
                                <label for="estado">APROBAR</label>
                                <input type="radio" id="estad" name="estado" value="Aprobada">
                                <label for="estado">RECHAZAR</label>
                                <input type="radio" id="estad" name="estado" value="Rechazada">
                                <input id="idOrden" class="form-control" type="hidden" name="idOrden"
                                    value="{{ $ordenCompra->idOrden }}">
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-info">{{ __('Aceptar') }}</button>
                                </div>
                            </div>
                        </form>

                        <div class="form-group">
                            <strong>Idproveedor:</strong>
                            {{ $ordenCompra->IdProveedor }}
                        </div>


                        <div class="form-group">
                            <strong>Idorden:</strong>
                            {{ $ordenCompra->idOrden }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $ordenCompra->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ordenCompra->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $ordenCompra->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>personal_id:</strong>
                            {{ $ordenCompra->personal_id }}
                        </div>
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


                                                <td>{{ $detalleOrdenCompra->cantidad }}</td>
                                                <td>{{ $detalleOrdenCompra->idOrden }}</td>
                                                <td>{{ $detalleOrdenCompra->idProducto }}</td>

                                                <td>

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
    </section>
@endsection
