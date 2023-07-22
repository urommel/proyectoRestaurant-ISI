<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class PlatoController
 * @package App\Http\Controllers
 */
class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::paginate();
        return view('plato.index', compact('platos'))
            ->with('i', (request()->input('page', 1) - 1) * $platos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria=Categoria::pluck('categoria','categoria');
        $plato = new Plato();
        return view('plato.create', compact('plato','categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Plato::$rules);

        $plato = Plato::create($request->all());

        return redirect()->route('platos.index')
            ->with('success', 'Plato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plato = Plato::find($id);

        return view('plato.show', compact('plato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plato = Plato::find($id);

        return view('plato.edit', compact('plato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Plato $plato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plato $plato)
    {
        request()->validate(Plato::$rules);

        $plato->update($request->all());

        return redirect()->route('platos.index')
            ->with('success', 'Plato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $plato = Plato::find($id)->delete();

        return redirect()->route('platos.index')
            ->with('success', 'Plato deleted successfully');
    }
}
