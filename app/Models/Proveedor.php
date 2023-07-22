<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $idProveedor
 * @property $compañia
 * @property $representante
 * @property $ruc
 * @property $celular
 * @property $direccion
 * @property $email
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    static $rules = [
		'idProveedor' => 'required',
		'compañia' => 'required',
		'representante' => 'required',
		'ruc' => 'required',
		'celular' => 'required',
		'direccion' => 'required',
		'email' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idProveedor','compañia','representante','ruc','celular','direccion','email','estado'];



}
