<?php

namespace App\Http\Controllers;

use App\Models\Detallemenu;
use Illuminate\Http\Request;

/**
 * Class DetallemenuController
 * @package App\Http\Controllers
 */
class DetallemenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallemenus = Detallemenu::paginate();

        return view('detallemenu.index', compact('detallemenus'))
            ->with('i', (request()->input('page', 1) - 1) * $detallemenus->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallemenu = new Detallemenu();
        return view('detallemenu.create', compact('detallemenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detallemenu::$rules);

        $detallemenu = Detallemenu::create($request->all());

        return redirect()->route('detallemenus.index')
            ->with('success', 'Detallemenu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idDetalleMenu,$idMenu)
    {
        $detallemenu = Detallemenu::where([
            ['idDetalleMenu', $idDetalleMenu],
            ['idMenu', $idMenu]
        ])->first();

        return view('detallemenu.show', compact('detallemenu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idDetalleMenu,$idMenu)
    {
        $detallemenu = Detallemenu::where('idDetalleMenu', $idDetalleMenu)->where('idMenu', $idMenu)->first();
        return view('detallemenu.edit', compact('detallemenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detallemenu $detallemenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detallemenu $detallemenu)
    {
        request()->validate(Detallecomanda::$rules);
        $idDetalleMenu = $request->input('idDetalleMenu');
        $idMenu = $request->input('idMenu');
        $detallemenu::where('idDetalleMenu', $idDetalleMenu)->where('idMenu', $idMenu)->update($request->only(['idPlato']));;
        return redirect()->route('detallemenus.index')
            ->with('success', 'Detallemenu updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idDetalleMenu,$idMenu)
    {
        $detallemenu = Detallemenu::where('idDetalleMenu',$idDetalleMenu)->where('idMenu',$idMenu)->delete();
        return redirect()->route('detallemenus.index')
            ->with('success', 'Detallemenu deleted successfully');
    }
}
