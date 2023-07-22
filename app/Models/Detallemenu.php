<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallemenu
 *
 * @property $idDetalleMenu
 * @property $idMenu
 * @property $idPlato
 * @property $created_at
 * @property $updated_at
 *
 * @property Menu $menu
 * @property Plato $plato
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detallemenu extends Model
{
    
    static $rules = [
		'idDetalleMenu' => 'required',
		'idMenu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idDetalleMenu','idMenu','idPlato'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function menu()
    {
        return $this->hasOne('App\Models\Menu', 'idMenu', 'idMenu');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function plato()
    {
        return $this->hasOne('App\Models\Plato', 'idPlato', 'idPlato');
    }
    

}
