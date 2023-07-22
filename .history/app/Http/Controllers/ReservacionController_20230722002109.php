<?php

namespace App\Http\Controllers;

use App\Models\Reservacion;
use App\Models\Mesa;
use App\Models\Cliente;
use Illuminate\Http\Request;

/**
 * Class ReservacionController
 * @package App\Http\Controllers
 */
class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservacions = Reservacion::paginate();

        return view('reservacion.index', compact('reservacions'))
            ->with('i', (request()->input('page', 1) - 1) * $reservacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function search(Request $request)
    // {
    //     $term = $request->input('term');

    //     $users = Cliente::where('Nombre', 'like', '%'.$term.'%')->get();

    //     return response()->json($users);
    // }

    public function create()
    {
        $mesas = Mesa::select('idMesa', 'nombre', 'estado')->get();
        $clientes = Cliente::select('id', 'documento', 'Nombre', 'Apellido')->get();
        $reservacion = new Reservacion();
        return view('reservacion.create', compact('reservacion','mesas', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reservacion::$rules);

        $reservacion = Reservacion::create($request->all());

        return redirect()->route('reservacions.index')
            ->with('success', 'Reservacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservacion = Reservacion::find($id);

        return view('reservacion.show', compact('reservacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservacion = Reservacion::find($id);

        return view('reservacion.edit', compact('reservacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reservacion $reservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacion $reservacion)
    {
        request()->validate(Reservacion::$rules);

        $reservacion->update($request->all());

        return redirect()->route('reservacions.index')
            ->with('success', 'Reservacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reservacion = Reservacion::find($id)->delete();

        return redirect()->route('reservacions.index')
            ->with('success', 'Reservacion deleted successfully');
    }
}
