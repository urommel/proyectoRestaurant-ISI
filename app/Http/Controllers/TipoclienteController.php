<?php

namespace App\Http\Controllers;

use App\Models\Tipocliente;
use Illuminate\Http\Request;

/**
 * Class TipoclienteController
 * @package App\Http\Controllers
 */
class TipoclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoclientes = Tipocliente::paginate();

        return view('tipocliente.index', compact('tipoclientes'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoclientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipocliente = new Tipocliente();
        return view('tipocliente.create', compact('tipocliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipocliente::$rules);

        $tipocliente = Tipocliente::create($request->all());

        return redirect()->route('tipoclientes.index')
            ->with('success', 'Tipocliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipocliente = Tipocliente::find($id);

        return view('tipocliente.show', compact('tipocliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipocliente = Tipocliente::find($id);

        return view('tipocliente.edit', compact('tipocliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipocliente $tipocliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipocliente $tipocliente)
    {
        request()->validate(Tipocliente::$rules);

        $tipocliente->update($request->all());

        return redirect()->route('tipoclientes.index')
            ->with('success', 'Tipocliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipocliente = Tipocliente::find($id)->delete();

        return redirect()->route('tipoclientes.index')
            ->with('success', 'Tipocliente deleted successfully');
    }
}
