<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion','cantidad','entidad_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

}
