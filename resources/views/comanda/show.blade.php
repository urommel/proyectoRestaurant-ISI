@extends('layouts.app')

@section('template_title')
    {{ $comanda->name ?? "{{ __('Show') Comanda" }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <section class="content container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                @includeif('partials.errors')


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Idcomanda</th>
										<th>Idplato</th>
										<th>Precio</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallecomandas as $detallecomanda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallecomanda->idComanda }}</td>
											<td>{{ $detallecomanda->idPlato }}</td>
											<td>{{ $detallecomanda->precio }}</td>
											<td>{{ $detallecomanda->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('detallecomandas.destroy',[$detallecomanda->idComanda, $detallecomanda->idPlato]) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('detallecomandas.edit',[$detallecomanda->idComanda, $detallecomanda->idPlato]) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detallecomandas->links() !!}
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
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
                                        
										<th>Idcomanda</th>
										<th>Idproducto</th>
										<th>Precio</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleproductos as $detalleproducto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleproducto->idComanda }}</td>
											<td>{{ $detalleproducto->idProducto }}</td>
											<td>{{ $detalleproducto->precio }}</td>
											<td>{{ $detalleproducto->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('detalleproductos.destroy',[$detalleproducto->idComanda,$detalleproducto->idProducto]) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalleproductos.edit',[$detalleproducto->idComanda,$detalleproducto->idProducto]) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detalleproductos->links() !!}
            </div>
        </div>
    </div>
@endsection
