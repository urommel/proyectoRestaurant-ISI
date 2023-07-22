<?php

namespace App\Http\Controllers;

use App\Models\Detallecomanda;
use App\Models\Comanda;
use Illuminate\Http\Request;

/**
 * Class DetallecomandaController
 * @package App\Http\Controllers
 */
class DetallecomandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallecomandas = Detallecomanda::paginate();
        return view('detallecomanda.index', compact('detallecomandas'))
            ->with('i', (request()->input('page', 1) - 1) * $detallecomandas->perPage());
    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create($idComanda)
    {
        $detallecomanda = new Detallecomanda();
        return view('detallecomanda.create', compact('detallecomanda','idComanda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detallecomanda::$rules);
        $detallecomanda = Detallecomanda::create($request->all());

        return redirect()->route('comandas.index')
            ->with('success', 'Detallecomanda created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idcomanda, $idplato)
    {
        $detallecomanda = Detallecomanda::where([
            ['idComanda', $idcomanda],
            ['plato_id', $idplato]
        ])->first();

        return view('detallecomanda.show', compact('detallecomanda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idcomanda, $idplato)
    {
        $detallecomanda = Detallecomanda::where('idcomanda', $idcomanda)->where('plato_id', $idplato)->first();
        return view('detallecomanda.edit', compact('detallecomanda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detallecomanda $detallecomanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detallecomanda $detallecomanda)
    {
        request()->validate(Detallecomanda::$rules);
        $idComanda = $request->input('idComanda');
        $idPlato = $request->input('plato_id');
        $detallecomanda::where('idComanda', $idComanda)->where('plato_id', $idPlato)->update($request->only(['precio', 'cantidad']));;

        return redirect()->route('detallecomandas.index')
            ->with('success', 'Detallecomanda updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idcomanda, $idplato)
    {
        $detallecomanda = Detallecomanda::where('idComanda',$idcomanda)->where('idPlato',$idplato)->delete();

        return redirect()->route('detallecomandas.index')
            ->with('success',$idplato);
    }
}
