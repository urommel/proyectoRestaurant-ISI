@extends('layouts.app')

@section('template_title')
    Orden Compra
@endsection

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col text-center">
            <h1>Orden dasdsa</h1>
        </div>
    </div>
    <form method="POST" action="{{ route('detalle-orden-compras.store') }}" role="form" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class=" container  col-6 card-body">

                <fieldset>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="personal_id">Trabajador</label>
                                <input id="personal_id" class="form-control" type="text" name="personal_id">
                            </div>
                            <div class="col-6">
                                <label for="Proveedor">Proveedor</label>
                                <div class="col-12">
                                    <select class="form-control " id="Proveedor" name="idProveedor">
                                        <option value="">Seleccione</option>
                                        @foreach ($proveedor as $item)
                                            <option value="{{ $item->idProveedor }}">{{ $item->compañia }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="col-10">
                                <label for="descripcion">Descripcion</label>
                                <input id="descripcion" class="form-control" type="text" name="descripcion">
                            </div>
                        </div>
                    </div>
                    <div class=" col-6">
                        <div class="col">
                            <button type="submit" class="form-control btn btn-primary btn-lg btn-block "> <i
                                    class="fa fa-fw fa-lg fa-plus"></i>Guardar</button>
                        </div>
                    </div>
                </fieldset>



            </div>

            <div class=" container; col-6">

                <fieldset>
                    <div class="container card-body">
                        <div class="row ">
                            <div class="col-6">
                                <label for="producto">Producto</label>

                                <select class="form-control " id="producto">
                                    <option value="">Seleccione</option>
                                    @foreach ($productos as $item)
                                        <option value="{{ $item->idProducto }}_{{ $item->nombre }}_{{ $item->precio }}">
                                            {{ $item->nombre }}</option>5
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-6">
                                <label for="cantidad">Cantidad</label>
                                <input id="cantidad" class="form-control" type="number" name="cantidad" value="0">
                            </div>
                            <div class="col-6">
                                <label for="precio">Precio</label>
                                <input id="precio" class="form-control" type="number" name="precio" value="">
                            </div>
                            <div class=" col-6">

                                <button class="form-control btn btn-success btn-lg  btn-block "
                                    style="margin: 20px 0px 20px 0px " id="add"> Agregar</button>

                            </div>

                            <input id="estado" class="form-control" type="hidden" name="estado" value="Pendiente">


                        </div>
                        <table class="table " id="detalle">
                            <thead>
                                <th>#</th>
                                <th>Producto</th>
                                <th>cantidad</th>
                                <th>Precio</th>
                                <th>Subtotal</th>
                                <th>Quitar</th>
                            </thead>
                        </table>
                        <div class="row">
                            <div class="col-12"><label for="total " class="float-right">Total</label></div>
                            <div class="col-8"></div>
                            <div class="col-4">
                                <input type="text" style="width: 100%" class="form-control  float-right" id="total"
                                    name="total" value="0" readonly>
                            </div>
                        </div>

                    </div>

                </fieldset>



            </div>

        </div>
    </form>


@endsection

@section('scripts')
    
@stop
