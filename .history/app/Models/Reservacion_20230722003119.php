<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservacion
 *
 * @property $id
 * @property $idCliente
 * @property $idMesa
 * @property $fechaAtencion
 * @property $fechaReservacion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Mesa $mesa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservacion extends Model
{

    static $rules = [
		'clientes_id' => 'required',
		'idMesa' => 'required',
		'fechaReservacion' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [' clientes_id','idMesa','fechaReservacion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'idCliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mesa()
    {
        return $this->hasOne('App\Models\Mesa', 'id', 'idMesa');
    }


}
