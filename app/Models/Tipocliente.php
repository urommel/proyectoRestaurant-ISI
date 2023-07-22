<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipocliente
 *
 * @property $id
 * @property $nombre
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipocliente extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];



}
