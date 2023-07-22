<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $idCategoria
 * @property $categoria
 * @property $descripcion
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{

    static $rules = [
		'categoria_id' => 'required',
		'categoria' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCategoria','categoria','descripcion'];
    protected $primaryKey='idCategoria';


}
