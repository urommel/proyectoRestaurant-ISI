<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plato
 *
 * @property $idPlato
 * @property $nombre
 * @property $precio
 * @property $idCategoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plato extends Model
{

    static $rules = [
		'idCategoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPlato','nombre','precio','idCategoria'];
    protected $primaryKey='idPlato';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'idCategoria', 'idCategoria');
    }


}
