<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'responsable', 'fecha','descripcion','publico','actividad_id','entidad_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
 
    
}
