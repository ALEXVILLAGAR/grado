<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Entity extends Model
{
     

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'direccion','rol','user_id'
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
    // /**
    //  * Entity belongs to Users.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function user()
    // {
    //     // belongsTo(RelatedModel, foreignKey = users_id, keyOnRelatedModel = id)
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    /**
     * Entity has many User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = entity_id, localKey = id)
        return $this->hasMany(User::class,'user_id');
    }

    /**
     * Entity belongs to Auxiliar.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function auxiliar()
    {
        // belongsTo(RelatedModel, foreignKey = auxiliar_id, keyOnRelatedModel = id)
        return $this->belongsTo(Auxiliar::class,'id');
    }
}
