<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallecomanda
 *
 * @property $idComanda
 * @property $idPlato
 * @property $precio
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Comanda $comanda
 * @property Plato $plato
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detallecomanda extends Model
{
    
    static $rules = [
		'idComanda' => 'required',
		'idPlato' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idComanda','idPlato','precio','cantidad'];
    protected $primaryKey='idComanda';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comanda()
    {
        return $this->hasOne('App\Models\Comanda', 'idComanda', 'idComanda');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function plato()
    {
        return $this->hasOne('App\Models\Plato', 'idPlato', 'idPlato');
    }
    

}
