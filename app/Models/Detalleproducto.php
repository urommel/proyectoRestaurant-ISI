<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalleproducto
 *
 * @property $idComanda
 * @property $idProducto
 * @property $precio
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Comanda $comanda
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalleproducto extends Model
{
    
    static $rules = [
		'idComanda' => 'required',
		'idProducto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idComanda','idProducto','precio','cantidad'];


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
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'idproducto', 'idProducto');
    }
    

}
