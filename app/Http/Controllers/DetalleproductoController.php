<?php

namespace App\Http\Controllers;

use App\Models\Detalleproducto;
use App\Models\Comanda;
use Illuminate\Http\Request;

/**
 * Class DetalleproductoController
 * @package App\Http\Controllers
 */
class DetalleproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleproductos = Detalleproducto::paginate();

        return view('detalleproducto.index', compact('detalleproductos'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleproductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idComanda)
    {
        $detalleproducto = new Detalleproducto();
        return view('detalleproducto.create', compact('detalleproducto','idComanda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detalleproducto::$rules);

        $detalleproducto = Detalleproducto::create($request->all());

        return redirect()->route('comandas.index')
            ->with('success', 'Detalleproducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idcomanda,$idproducto)
    {
        $detalleproducto  = Detalleproducto::where([
            ['idComanda', $idcomanda],
            ['idProducto', $idproducto]
        ])->first();

        return view('detalleproducto.show', compact('detalleproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idcomanda,$idproducto)
    {
        $detalleproducto = Detalleproducto::where('idComanda', $idcomanda)->where('idProducto', $idproducto)->first();

        return view('detalleproducto.edit', compact('detalleproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detalleproducto $detalleproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalleproducto $detalleproducto)
    {
        request()->validate(Detalleproducto::$rules);

        $detalleproducto->update($request->all());

        return redirect()->route('detalleproductos.index')
            ->with('success', 'Detalleproducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idcomanda,$idproducto)
    {
        $detalleproducto = Detalleproducto::where('idComanda',$idcomanda)->where('idProducto',$idproducto)->delete();

        return redirect()->route('detalleproductos.index')
            ->with('success', 'Detalleproducto deleted successfully');
    }
}
