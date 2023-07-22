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
        
        'personal_id' => 'required',
    ];

    protected $fillable = ['personal_id', 'estado', 'justificacion', 'minutos', 'dia', 'fecha'];

    protected $fillable = ['personal_id', 'estado', 'justificacion', 'minutos', 'dia', 'fecha'];


    // de uno a muchos (inversa) persnnal

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
