<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use Illuminate\Http\Request;
use App\Models\DetalleOrdenCompra;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenCompras = OrdenCompra::where('estado', 'Aprobada')->get();
        $i = 0;
        return view('recepcion.index', compact('ordenCompras', 'i'));
    }

    public function index2()
    {
        $ordenCompras = OrdenCompra::where('estado', 'Aprobada')->get();
        $i = 0;
        return view('orden-compra.index2', compact('ordenCompras', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordenCompra = new OrdenCompra();
        $detalleOrdenCompras = DetalleOrdenCompra::paginate();

        return view('orden-compra.create', compact('ordenCompra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_productos = $request->list_producto;
        $cantidad = $request->list_cantidad;
        $cantidadA = $request->list_cantidadA;



        for ($i = 0; $i < sizeof($id_productos); $i++) {
            Producto::where('idProducto', $id_productos[$i])->update(['stock' => ($cantidad[$i] + $cantidadA[$i])]);
        }
        $ordenCompras = OrdenCompra::where('estado', 'Aprobada')->get();
        $i = 0;
        return view('recepcion.index', compact('ordenCompras', 'i'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordenCompra = OrdenCompra::find($id);
        $detalleOrdenCompras =  DB::table('detalleOrdenCompras')->where('idOrden', $id)->get();
        return view('recepcion.show', compact('ordenCompra', 'detalleOrdenCompras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $ordenCompra = OrdenCompra::find($id);
        $productos = Producto::all();

        $detalleOrdenCompras =  DetalleOrdenCompra::where('idOrden', $id)->get();


        return view('recepcion.edit', compact('detalleOrdenCompras', 'id', 'ordenCompra', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OrdenCompra $ordenCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ordenCompra $ordenCompra)
    {
        OrdenCompra::where('idOrden', $request->idOrden)->update(['estado' => $request->estado, 'observacion' => $request->observacion]);
        $ordenCompras = OrdenCompra::where('estado', 'Aprobada')->get();
        $i = 0;
        return view('recepcion.index', compact('ordenCompras', 'i'));
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordenCompra = OrdenCompra::find($id)->delete();

        return redirect()->route('orden-compras.index')
            ->with('success', 'OrdenCompra deleted successfully');
    }
}
