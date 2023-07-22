<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipomenu
 *
 * @property $idTipoMenu
 * @property $tipo
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Menu[] $menuses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipomenu extends Model
{
    
    static $rules = [
		'idTipoMenu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idTipoMenu','tipo','descripcion'];
    protected $primaryKey='idTipoMenu';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menuses()
    {
        return $this->hasMany('App\Models\Menu', 'idTipoMenu', 'idTipoMenu');
    }
    

}
