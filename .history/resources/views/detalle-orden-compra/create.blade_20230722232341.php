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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#Proveedor').select2();
        $('#producto').select2();
        let index = 0;
        let i = 1;
        let total = 0;
        let list_producto = [];
        $('#total').html(total);
        $('#add').click(function(e) {
            e.preventDefault();
            let producto = $('#producto').val().split('_');
            let cantidad = $('#cantidad').val();
            let precio = $('#precio').val();

            if (validate(producto[0]) == true) {
                let row = '<tr id="row' + index + '"><td><input type="hidden" name="list_producto[]" value="' +
                    producto[0] + '"><input type="hidden" name="list_cantidad[]" value="' + cantidad +
                    '"><input type="hidden" name="list_precios[]" value="' + precio + '">' + i++ +
                    '</td><td>' + producto[1] + '</td><td>' + cantidad + '</td><td>' + precio + '</td><td>' +
                    precio * cantidad + '</td><td><button onclick="remove(' +
                    index + ' , ' + (producto[2] *
                        cantidad) + ' )" class="btn btn-danger"><i class="fas fa-minus"></i></button></td></tr>';
                $('#error').removeClass('d-block');
                $('#detalle').append(row);
                total += (precio * cantidad);
                list_producto[index] = [producto[0]];
                $('#total').val(total);
                index++;
                $('#cantidad').val(1);
                $('#error-exists').removeClass('d-block');
            }
        });

        function remove(row, price) {
            $('#row' + row).remove();
            total -= price;
            list_producto.splice(row);
            $('#total').val(total);
            index--;
            i--;
        }

        function validate(producto) {

            var v = true;
            for (let count = 0; count < list_producto.length; count++) {
                let element = list_producto[count];
                console.log(element);
                console.log(producto);

                if (element == producto) {

                    return false;
                } else {
                    v = true;
                }
            }
            return v;
        }
    });
    </script>
@endsection


{{-- @section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#Proveedor').select2();
            $('#producto').select2();
            let index = 0;
            let i = 1;
            let total = 0;
            let list_producto = [];
            $('#total').val(total);
            $('#add').click(function(e) {
                e.preventDefault();
                let producto = $('#producto').val().split('_');
                let cantidad = $('#cantidad').val();
                let precio = $('#precio').val();

                if (validate(producto[0]) == true) {
                    let row = '<tr id="row' + index +
                        '"><td><input type="hidden" name="list_producto[]" value="' +
                        producto[0] + '"><input type="hidden" name="list_cantidad[]" value="' + cantidad +
                        '"><input type="hidden" name="list_precios[]" value="' + precio + '">' + i++ +
                        '</td><td>' + producto[1] + '</td><td>' + cantidad + '</td><td>' + precio +
                        '</td><td>' +
                        precio * cantidad + '</td><td><button onclick="remove(' +
                        index + ' , ' + (producto[2] *
                            cantidad) +
                        ' )" class="btn btn-danger"><i class="fas fa-minus"></i></button></td></tr>';
                    $('#error').removeClass('d-block');
                    $('#detalle').append(row);
                    total += (precio * cantidad);
                    list_producto[index] = [producto[0]];
                    $('#total').val(total);
                    index++;
                    $('#cantidad').val(1);
                    $('#error-exists').removeClass('d-block');
                }
            });

            function remove(row, price) {
                $('#row' + row).remove();
                total -= price;
                list_producto.splice(row);
                $('#total').val(total);
                index--;
                i--;
            }

            function validate(producto) {

                var v = true;
                for (let count = 0; count < list_producto.length; count++) {
                    let element = list_producto[count];
                    console.log(element);
                    console.log(producto);

                    if (element == producto) {

                        return false;
                    } else {
                        v = true;
                    }
                }
                return v;
            }
        });
    </script>
@endsection --}}
