<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'persona_id', 'mayor_id','entidad_id'
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
   public function mayor()
   {
   	// belongsTo(RelatedModel, foreignKey = entidad_id, keyOnRelatedModel = id)
   	return $this->belongsTo(Mayor::class,'mayor_id');
   }

    /**
     * Auxiliar belongs to Personas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona()
    {
    	// belongsTo(RelatedModel, foreignKey = personas_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Person::class,'persona_id');
    }
}
