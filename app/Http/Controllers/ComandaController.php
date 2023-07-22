<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Detallecomanda;
use App\Models\Detalleproducto;
use Illuminate\Http\Request;

/**
 * Class ComandaController
 * @package App\Http\Controllers
 */
class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comandas = Comanda::paginate();
        
        return view('comanda.index', compact('comandas'))
            ->with('i', (request()->input('page', 1) - 1) * $comandas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comanda = new Comanda();
        return view('comanda.create', compact('comanda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comanda::$rules);

        $comanda = Comanda::create($request->all());

        return redirect()->route('comandas.index')
            ->with('success', 'Comanda created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idcomanda)
    {
        $detallecomandas = Detallecomanda::join('comandas as c', 'c.idComanda', '=', 'detallecomandas.idComanda')
        ->where('c.idcomanda', $idcomanda)
        ->select('detallecomandas.*')
        ->paginate();

        $detalleproductos = Detalleproducto::join('comandas as c', 'c.idComanda', '=', 'detalleproductos.idComanda')
        ->where('c.idcomanda', $idcomanda)
        ->select('detalleproductos.*')
        ->paginate();

        return view('comanda.show', compact('detallecomandas','detalleproductos'))
        ->with('i', (request()->input('page', 1) - 1) * $detallecomandas->perPage())
        ->with('i', (request()->input('page', 1) - 1) * $detalleproductos 
         
         ->perPage());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comanda = Comanda::find($id);

        return view('comanda.edit', compact('comanda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comanda $comanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comanda $comanda)
    {
        request()->validate(Comanda::$rules);

        $comanda->update($request->all());

        return redirect()->route('comandas.index')
            ->with('success', 'Comanda updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comanda = Comanda::find($id)->delete();

        return redirect()->route('comandas.index')
            ->with('success', 'Comanda deleted successfully');
    }
}
