<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table th, table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                        
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
                                            
											<td>{{ $detallecomanda->idComanda }}</td>
											<td>{{ $detallecomanda->idPlato }}</td>
											<td>{{ $detallecomanda->precio }}</td>
											<td>{{ $detallecomanda->cantidad }}</td>

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



    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
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
                                            
											<td>{{ $detalleproducto->idComanda }}</td>
											<td>{{ $detalleproducto->idProducto }}</td>
											<td>{{ $detalleproducto->precio }}</td>
											<td>{{ $detalleproducto->cantidad }}</td>

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

    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                        
										<th>Total en Platillos</th>
                                        <th>Total en Bebidas</th>
                                        <th>Total Neto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            
											<td>{{  $total }}</td>
                                            <td>{{ $totalp }}</td>
                                            <td>{{ $totalp + $total}}</td>
                                        </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>