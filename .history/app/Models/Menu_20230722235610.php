<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 *
 * @property $idMenu
 * @property $fecha
 * @property $estado
 * @property $idTipoMenu
 * @property $created_at
 * @property $updated_at
 *
 * @property Detallemenu[] $detallemenuses
 * @property Tipomenu $tipomenu
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Menu extends Model
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
    protected $fillable = ['idMenu','fecha','estado','idTipoMenu'];
    protected $primaryKey='idMenu';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallemenuses()
    {
        return $this->hasMany('App\Models\Detallemenu', 'idMenu', 'idMenu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipomenu()
    {
        return $this->hasOne('App\Models\Tipomenu', 'idTipoMenu', 'idTipoMenu');
    }


}
