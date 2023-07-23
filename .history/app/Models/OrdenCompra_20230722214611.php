<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdenCompra
 *
 * @property $idProveedor
 * @property $idOrden
 * @property $fecha
 * @property $estado
 * @property $descripcion
 * @property $personal_id
 *
 * @property DetalleOrdenCompra $detalleOrdenCompra
 * @property Personal $personal
 * @property Proveedor $proveedor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OrdenCompra extends Model
{public $timestamps = false;

    static $rules = [
		'idOrden' => 'required',
		'personal_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "ordenCompra";
    protected $fillable = ['idProveedor','idOrden','fecha','estado','descripcion','personal_id','precioTotal','observacion'];
    protected $primaryKey = 'idOrden';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detalleOrdenCompra()
    {
        return $this->hasOne('App\Models\DetalleOrdenCompra', 'idOrden', 'idOrden');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'personal_id', 'personal_id');
    }
    public function personals()
    {
        return $this->belongsTo(Personal::class, 'personal_id', 'personal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedor', 'idProveedor', 'idProveedor');
    }


}
