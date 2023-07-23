@extends('layouts.app')

@section('template_title')
    Comanda
@endsection

@section('content')
{{date_default_timezone_set('America/Lima')}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('comandas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New Comanda') }}
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

										<th>Idmesa</th>
										<th>Dni</th>
										<th>Fecha</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comandas as $comanda)
                                    @if($comanda->estado=="SIN PAGAR" and $comanda->fecha==date('Y-m-d'))
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $comanda->idMesa }}</td>
											<td>{{ $comanda->cliente->documento }}</td>
											<td>{{ $comanda->fecha }}</td>
											<td>{{ $comanda->estado }}</td>

                                            <td>
                                                <form action="{{ route('comandas.destroy',$comanda->idComanda) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comandas.show',$comanda->idComanda) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comandas.edit',$comanda->idComanda) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detallecomandas.create',$comanda->idComanda) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Platillos') }}</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalleproductos.create',$comanda->idComanda) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Bebidas') }}</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('generar-pdf', $comanda->idComanda) }}">{{ __('Generar Voleta') }}</a>
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
                {!! $comandas->links() !!}
            </div>
        </div>
    </div>
@endsection
