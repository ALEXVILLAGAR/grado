<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'nombres', 'apellidos','identificacion','rol','user_id'
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
    //  * Person belongs to User.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function user()
    // {
    //     // belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
    //     return $this->belongsTo(User::class,'user_id');
    // }

    /**
     * Person has one Auxiliar.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function auxiliar()
    {
        // hasOne(RelatedModel, foreignKeyOnRelatedModel = person_id, localKey = id)
        return $this->hasOne(Auxiliar::class,'id');
    }

    /**
     * Person has one .
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Acudiente()
    {
        // hasOne(RelatedModel, foreignKeyOnRelatedModel = person_id, localKey = id)
        return $this->hasOne(Acudiente::class,'id');
    }

    /**
     * Person belongs to Use.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // belongsTo(RelatedModel, foreignKey = use_id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class);
    }

    /**
     * Person belongs to VIsitas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Visitas()
    {
        // belongsTo(RelatedModel, foreignKey = vIsitas_id, keyOnRelatedModel = id)
        return $this->belongsTo(VIsitas::class);
    }

}
