<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    static $rules = [
        'estado' => 'required',
        'dia' => 'required',
        'fecha' => 'required',
        'justificacion' => 'required',
        'minutos' => 'required',
        'personal_id' => 'required',
    ];



    // de uno a muchos (inversa) persnnal

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
