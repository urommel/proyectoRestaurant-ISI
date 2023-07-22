<?php

namespace App\Http\Controllers;

use App\Models\Horario;

use Illuminate\Http\Request;
use App\Models\Personal;
use Illuminate\Support\Facades\DB;


/**
 * Class HorarioController
 * @package App\Http\Controllers
 */
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horariosExistentes = Horario::pluck('dia')->toArray();
        $personal = Personal::all();
        $horarios = Horario::all();
        $horarios = Horario::paginate();
        return view('horario.index', compact('horarios', 'personal', 'horariosExistentes'))
            ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());

        // $horarios = Horario::all();

        // return response()->json($horarios);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //crear un array de dias
        // return $request->id;

        // setlocale(LC_ALL, 'es_ES');
        // $diaSemana = strftime('%A');
        // return $diaSemana;

        $horariosExistentes = Horario::pluck('dia')->toArray();
        $person = Personal::find($request->id);




        $horario = new Horario();
        return view('horario.create', compact('horario', 'person', 'horariosExistentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return 


        $horarios = $request->horarios; // Obtener los horarios enviados desde la solicitud

        foreach ($horarios as $dia => $detalle) {
            $trabaja = $detalle['trabaja'];
            $horaInicio = $detalle['hora_inicio'];
            $horaFin = $detalle['hora_fin'];

            $horarioExistente = Horario::where('dia', $dia)
                ->where('personal_id', $request->personal_id)
                ->first();

            if ($horarioExistente) {
                return redirect()->route('personal.index')
                    ->with('success', 'Ya existe un horario para el día ' . $dia);
            }
            // Ejemplo con Eloquent ORM:
            $horario = new Horario();
            $horario->dia = $dia;
            $horario->trabaja = $trabaja;
            $horario->hora_inicio = $horaInicio;
            $horario->hora_fin = $horaFin;
            $horario->personal_id = $request->personal_id;
            $horario->save();
        }

        return redirect()->route('personal.index')
            ->with('success', 'Horario creado correctamente');



        // $horarios = $request->validate(Horario::rules(), Horario::messages())['horarios'];

        // foreach ($horarios as $dia => $datosDia) {
        //     $horario = new Horario();
        //     $horario->dia = $dia;
        //     $horario->hora_inicio = $datosDia['hora_inicio'];
        //     $horario->hora_fin = $datosDia['hora_fin'];
        //     $horario->save();
        // }

        // return response()->json(['message' => 'Horarios creados exitosamente'], 201);

        // $sL = $request->estado_Lunes;
        // $sM = $request->estado_Martes;
        // $sMi = $request->estado_Miercoles;
        // $sJ = $request->estado_Jueves;
        // $sV = $request->estado_Viernes;
        // $sS = $request->estado_Sabado;
        // $sD = $request->estado_Domingo;

        // // dd ($sL,$sM,$sMi,$sJ,$sV,$sS,$sD);

        // if ($sL != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Lunes';
        //     $horario->hora_inicio = $request->hora_inicio_Lunes;
        //     $horario->hora_fin = $request->hora_fin_Lunes;
        //     $horario->save();
        // }
        // if ($sM != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Martes';
        //     $horario->hora_inicio = $request->hora_inicio_Martes;
        //     $horario->hora_fin = $request->hora_fin_Martes;
        //     $horario->save();
        // }
        // if ($sMi != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Miercoles';
        //     $horario->hora_inicio = $request->hora_inicio_Miercoles;
        //     $horario->hora_fin = $request->hora_fin_Miercoles;
        //     $horario->save();
        // }
        // if ($sJ != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Jueves';
        //     $horario->hora_inicio = $request->hora_inicio_Jueves;
        //     $horario->hora_fin = $request->hora_fin_Jueves;
        //     $horario->save();
        // }
        // if ($sV != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Viernes';
        //     $horario->hora_inicio = $request->hora_inicio_Viernes;
        //     $horario->hora_fin = $request->hora_fin_Viernes;
        //     $horario->save();
        // }
        // if ($sS != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Sabado';
        //     $horario->hora_inicio = $request->hora_inicio_Sabado;
        //     $horario->hora_fin = $request->hora_fin_Sabado;
        //     $horario->save();
        // }
        // if ($sD != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Domingo';
        //     $horario->hora_inicio = $request->hora_inicio_Domingo;
        //     $horario->hora_fin = $request->hora_fin_Domingo;
        //     $horario->save();
        // }

        // return redirect()->route('horario.index')
        //     ->with('success', 'Horario created successfully.');


        // request()->validate(Personal::$rules);



        // return redirect()->route('horario.store')
        //     ->with('success', 'Horario creado correctamente');

        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::findOrFail($id);
        $horarios = Horario::find($id);

        $horarios = Horario::where('personal_id', $id)->get();


        return view('horario.show', compact('horarios', 'personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $horario = Horario::findOrFail($id);

        return view('horario.edit', compact('horario'));

        // $horario = Horario::findOrFail($id);

        // return view('horario.editar')->with('horario', $horario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Horario $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $horario = Horario::findOrFail($id);

        // Obtén el día del campo oculto
        $dia = $request->input('dia');


        // Actualizar los campos del horario con los datos del formulario
        $horario->hora_inicio = $request->input('hora_inicio');
        $horario->hora_fin = $request->input('hora_fin');
        // $horario->trabaja = $request->input('trabaja') ? true : false;

        // Otros campos a actualizar

        $horario->save();

        return redirect()->route('horario.show',  $horario->personal_id)->with('mensaje', 'El horario ha sido actualizado exitosamente.');



        // $horario = Horario::findOrFail($request->id);

        // $horario->update([
        //     'dia' => $request->dia,
        //     'hora_inicio' => $request->hora_inicio,
        //     'hora_fin' => $request->hora_fin,
        // ]);

        // return redirect()->route('horarios.show')->with('success', 'Horario actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horario = Horario::findOrFail($id);
        $horario->delete();

        return redirect()->back()->with('mensaje', 'El horario ha sido eliminado exitosamente.');
    }
}
