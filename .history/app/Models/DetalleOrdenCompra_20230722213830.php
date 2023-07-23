<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleOrdenCompra
 *
 * @property $cantidad
 * @property $idOrden
 * @property $idproducto
 *
 * @property OrdenCompra $ordenCompra
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleOrdenCompra extends Model
{public $timestamps = false;

    static $rules = [
		'cantidad' => 'required',
		'idOrden' => 'required',
		'idproducto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "detalle_orden_compra";


    protected $fillable = ['cantidad','idOrden','idproducto',];
    protected $primaryKey = 'idOrden';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ordenCompra()
    {
        return $this->hasOne('App\Models\OrdenCompra', 'idOrden', 'idOrden');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'idproducto', 'idproducto');
    }
    public function productos()
    {
        return $this->belongsTo(Producto::class, 'idproducto', 'idproducto');
    }


}
