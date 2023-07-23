<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use Illuminate\Http\Request;
use App\Models\DetalleOrdenCompra;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

/**
 * Class OrdenCompraController
 * @package App\Http\Controllers
 */
class OrdenCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenCompras = OrdenCompra::all();
        $i = 0;
        return view('orden-compra.index', compact('ordenCompras', 'i'));
    }

    public function index2()
    {
        $ordenCompras = OrdenCompra::where('estado', 'Pendiente')->get();
        $i = 0;
        return view('orden-compra.index', compact('ordenCompras', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordenCompra = new OrdenCompra();
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
        $detalleOrdenCompras = DetalleOrdenCompra::where('idOrden', $request->idOrden)->get();
        $id = $request->idOrden;

        $val =  DB::table('detalleOrdenCompra')->where('idOrden', $request->idOrden)->where('idProducto', $request->idProducto)->exists();
        if ($val == false) {
            DetalleOrdenCompra::create([

                'idOrden' => $request->idOrden,
                'idProducto' => $request->idProducto,
                'cantidad' => $request->cantidad

            ]);
            $ordenCompra2 = Producto::find($request->idProducto);
            $sub = OrdenCompra::find($request->idOrden,);
            $ordenCompra = OrdenCompra::where('idOrden', $request->idOrden)->update(['precioTotal' => (($sub->precioTotal) + ($ordenCompra2->precio * $request->cantidad))],);
        }





        $detalleOrdenCompras = DetalleOrdenCompra::where('idOrden', $request->idOrden)->get();
        $id = $request->idOrden;
        return view('orden-compra.edit', compact('detalleOrdenCompras', 'id'))
            ->with('success', 'OrdenCompra created successfully.');
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
        $detalleOrdenCompras =  DB::table('detalleOrden_compra')->where('idOrden', $id)->get();
        return view('orden-compra.show', compact('ordenCompra', 'detalleOrdenCompras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordenCompra = OrdenCompra::find($id, ['estado']);
        $ordenCompras = OrdenCompra::paginate();



        $detalleOrdenCompras = DetalleOrdenCompra::where('idOrden', $id)->get();
        if ($ordenCompra->estado == 'Pendiente') {
            return view('orden-compra.edit', compact('detalleOrdenCompras', 'id'));
        } else {
            return view('orden-compra.index', compact('ordenCompras'))
                ->with('i', (request()->input('page', 1) - 1) * $ordenCompras->perPage());
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OrdenCompra $ordenCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenCompra $ordenCompra)
    {
        request()->validate(OrdenCompra::$rules);

        $ordenCompra->update($request->all());

        return redirect()->route('orden-compras.index')
            ->with('success', 'OrdenCompra updated successfully');
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
