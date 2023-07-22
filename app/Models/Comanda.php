<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comanda
 *
 * @property $idComanda
 * @property $idMesa
 * @property $dni
 * @property $fecha
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Mesa $mesa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comanda extends Model
{

    static $rules = [
		'idMesa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idComanda','idMesa','dni','fecha','estado'];
    protected $primaryKey='idComanda';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'dni');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mesa()
    {
        return $this->hasOne('App\Models\Mesa', 'idMesa', 'idMesa');
    }


}
