<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mayor extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'apellidos','identificacion','descripcion','entidad_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

   /**
    * Auxiliar belongs to Entidad.
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function entidad()
   {
   	// belongsTo(RelatedModel, foreignKey = entidad_id, keyOnRelatedModel = id)
   	return $this->belongsTo(Entity::class,'entidad_id');
   }

}
