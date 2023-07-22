<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

/**
 * Class Horario
 *
 * @property $id
 * @property $dia
 * @property $hora_inicio
 * @property $hora_fin
 * @property $personal_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Personal $personal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{

    static $rules = [
		'dia' => 'required',
        'trabaja' => 'required','boolean',
		'hora_inicio' => 'required|date_format:H:i',
        'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
		'personal_id' => 'required',
    ];

    // protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    // protected $fillable = ['dia','hora_inicio','hora_fin','personal_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    // public function personal()
    // {
    //     return $this->hasOne('App\Models\Personal', 'id', 'personal_id');
    // }

    protected $fillable = [
        'personal_id',
        'dia',
        'trabaja',
        'hora_inicio',
        'hora_fin',
    ];

    protected $table = 'horarios';

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }


}
