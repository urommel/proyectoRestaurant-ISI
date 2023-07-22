<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $idproducto
 * @property $nombre
 * @property $descripcion
 * @property $medida
 * @property $stock
 * @property $idTipo
 * @property $created_at
 * @property $updated_at
 * @property $precio
 *
 * @property Detalleproducto[] $detalleproductos
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'idproducto' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idproducto','nombre','descripcion','medida','stock','idTipo','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleproductos()
    {
        return $this->hasMany('App\Models\Detalleproducto', 'idProducto', 'idproducto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'idTipo', 'idTipo');
    }
    

}
