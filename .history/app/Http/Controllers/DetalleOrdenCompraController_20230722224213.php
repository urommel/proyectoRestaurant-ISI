<?php

namespace App\Http\Controllers;

use App\Models\DetalleOrdenCompra;
use App\Models\OrdenCompra;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


/**
 * Class DetalleOrdenCompraController
 * @package App\Http\Controllers
 */
class DetalleOrdenCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleOrdenCompras = DetalleOrdenCompra::paginate();

        return view('detalle-orden-compra.index', compact('detalleOrdenCompras'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleOrdenCompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $detalleOrdenCompras = DetalleOrdenCompra::paginate();
        $proveedor = Proveedor::Paginate();
        $productos = Producto::Paginate();

        return view('detalle-orden-compra.create', compact('detalleOrdenCompras', 'proveedor', 'productos'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleOrdenCompras->perPage());
    }
    public function create2($id)
    {


        $detalleOrdenCompra = DetalleOrdenCompra::find($id);
        $productos = Producto::Paginate();

        return view('detalle-orden-compra.create2', compact('detalleOrdenCompra', 'productos', 'id'));
    }
    public function store2(Request $request)
    {


        $detalleOrdenCompra = new ordenCompra();
        $detalleOrdenCompra->idProducto = $request->idProducto;
        $detalleOrdenCompra->cantidad = $request->idProducto;




        DetalleOrdenCompra::create([

            'idOrden' => 73,
            'idProducto' => $request->idProducto,
            'cantidad' => $request->cantidad,

        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(DetalleOrdenCompra::$rules);

        //$detalleOrdenCompra = DetalleOrdenCompra::create($request->all());

        // return $request;

        $id_productos = $request->list_producto;
        $cantidad = $request->list_cantidad;
        $precio = $request->precio,;


        $data = array(
            'fecha' => date('Y-m-d'),
            'estado' => $request->estado,
            'personal_id' => $request->personal_id,
            'descripcion' => $request->descripcion,
            'idProveedor' => $request->idProveedor,
            'precioTotal' => $request->total,
            'precio' => $request->precio,
            'observacion' => '',
        );
        $lastid = DB::table('ordenCompras')->insertGetId($data);

        for ($i = 0; $i < sizeof($id_productos); $i++) {
            DetalleOrdenCompra::create([

                'idOrden' => $lastid,
                'idProducto' => $id_productos[$i],
                'cantidad' => $cantidad[$i],
                'precio' => $request->precio,
            ]);
        }


        return redirect()->route('orden-compras.index')
            ->with('success', 'DetalleOrdenCompra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleOrdenCompra = DetalleOrdenCompra::find($id);

        return view('detalle-orden-compra.show', compact('detalleOrdenCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $idd)
    {
        $detalleOrdenCompra = DetalleOrdenCompra::find($id);
        $det = DetalleOrdenCompra::where('idOrden', $id)->where('idProducto', $idd);
        DB::listen(function ($query) {
            Log::info($query->sql);
        });

        return view('detalle-orden-compra.edit', compact('detalleOrdenCompra', 'id', 'idd', 'det'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleOrdenCompra $detalleOrdenCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleOrdenCompra $detalleOrdenCompra)
    {
        request()->validate(DetalleOrdenCompra::$rules);
        $detalleOrdenCompra = DetalleOrdenCompra::where('idOrden', $request->idOrden,)->where('idProducto', $request->idProducto)->delete();
        DetalleOrdenCompra::create([

            'idOrden' => $request->idOrden,
            'idproducto' => $request->idProducto,
            'cantidad' => $request->cantidad,

        ]);
        $ordenCompra2 = Producto::find($request->idProducto);
        $sub = OrdenCompra::find($request->idOrden,);
        $ordenCompra = OrdenCompra::where('idOrden', $request->idOrden)->update(['precioTotal' => (($sub->precioTotal - ($ordenCompra2->precio * $request->cantidadA)) + ($ordenCompra2->precio * $request->cantidad))],);



        $detalleOrdenCompras = DetalleOrdenCompra::where('idOrden', $request->idOrden)->get();
        $id = $request->idOrden;
        return view('orden-compra.edit', compact('detalleOrdenCompras', 'id'))
            ->with('success', 'DetalleOrdenCompra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id, $idd)
    {
        DetalleOrdenCompra::where('idOrden', $id)->where('idProducto', $idd)->delete();

        $detalleOrdenCompras = DetalleOrdenCompra::where('idOrden', $id)->get();

        return view('orden-compra.edit', compact('detalleOrdenCompras', 'id'))
            ->with('success', 'DetalleOrdenCompra updated successfully');
    }
}
