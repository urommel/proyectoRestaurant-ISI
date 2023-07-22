<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Personal;
use App\Models\Asistencia;
use App\Models\Horario;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asistencias = Asistencia::all(); // Obtén todas las asistencias

        return view('asistencia.index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $horarios = Horario::all(); // Obtén todos los horarios
        $personals = Personal::all(); // Obtén todos los personales
        $asistencias = Asistencia::all(); // Obtén todas las asistencias

        return view('asistencia.create', compact('asistencias', 'personals', 'horarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $diaActual = $this->diasemanaactual();
        $diasAsignados = $request->input('diaH');

        if (in_array($diaActual, $diasAsignados)) {
            $asistencia = new Asistencia();
            $asistencia->personal_id = $request->input('personal_id');
            $asistencia->estado = $request->input('estado');
            $asistencia->justificacion = $request->input('justificacion');
            $asistencia->minutos = $request->input('minutos');
            $asistencia->dia = $diaActual;
            $asistencia->fecha = now()->toDateString();
            $asistencia->save();

            return redirect()->route('personal.index')->with('success', 'Asistencia registrada correctamente.');
        } else {
            return redirect()->back()->with('success', 'No puedes registrar la asistencia hoy.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        //
        $asistencia = Asistencia::all(); // Obtén todas las asistencias

        return view('asistencia.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia, $id)
    {
        //
        $horarios = Horario::all();
        $personals = Personal::all();
        // Buscar el registro de asistencia por su ID
        $asistencia = Asistencia::findOrFail($id);

        // Retornar la vista de edición con el registro de asistencia
        return view('asistencia.edit', compact('asistencia', 'personals', 'horarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia, $id)
    {
        //
        // Validar los datos del formulario de edición
        $request->validate([
            'estado' => 'required',
            'justificacion' => 'nullable|string',
            'minutos' => 'nullable|integer',
            // Agrega aquí las demás reglas de validación según tus necesidades
        ]);

        // Buscar el registro de asistencia por su ID
        $asistencia = Asistencia::findOrFail($id);

        // Actualizar los datos del registro con los valores del formulario
        $asistencia->estado = $request->estado;
        $asistencia->justificacion = $request->justificacion;
        $asistencia->minutos = $request->minutos;
        // Actualiza aquí los demás campos que necesites

        // Guardar los cambios en la base de datos
        $asistencia->save();

        // Redireccionar a la página deseada después de la edición
        return redirect()->route('asistencia.show', $asistencia->id)->with('success', 'Asistencia actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia, $id)
    {
        //

        $asistencia = Asistencia::findOrFail($id);
        $asistencia->delete();

        return redirect()->route('personal.index')->with('success', 'Asistencia eliminada correctamente.');
    }

    public function diasemanaactual()
    {
        $fecha = new DateTime();
        $diaSemana = $fecha->format('N');
        $nombreDia = '';
        switch ($diaSemana) {
            case '1':
                $nombreDia = 'lunes';
                break;
            case '2':
                $nombreDia = 'martes';
                break;
            case '3':
                $nombreDia = 'miércoles';
                break;
            case '4':
                $nombreDia = 'Jueves';
                break;
            case '5':
                $nombreDia = 'Viernes';
                break;
            case '6':
                $nombreDia = 'Sábado';
                break;
            case '7':
                $nombreDia = 'Domingo';
                break;
        }
        return $nombreDia;
    }
}
