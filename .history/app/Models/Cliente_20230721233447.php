<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $idTipo
 * @property $documento
 * @property $Nombre
 * @property $Apellido
 *
 * @property Tipocliente $tipocliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{

    static $rules = [
		' tipoclientes_id' => 'required',
		'documento' => 'required',
		'Nombre' => 'required',
		'Apellido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idTipo','documento','Nombre','Apellido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipocliente()
    {
        return $this->hasOne('App\Models\Tipocliente', 'id', 'idTipo');
    }


}
