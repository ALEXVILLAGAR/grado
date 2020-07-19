<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'fecha','estado','descripcion','persona_id','entidad_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
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

    /**
     * Visitas has one Person.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Person()
    {
        // hasOne(RelatedModel, foreignKeyOnRelatedModel = visitas_id, localKey = id)
        return $this->hasOne(Person::class);
    }

}
