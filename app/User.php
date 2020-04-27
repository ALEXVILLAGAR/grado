<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\{User,Entity,Person};

class User extends Authenticatable
{    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','tipo','correo','telefono',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
      * User has one Entity.
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
      */
     public function entidad()
     {
         // hasOne(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
         return $this->hasOne(Entity::class);
     }

     /**
      * User has one Person.
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasOne
      */
     public function persona()
     {
         // hasOne(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
         return $this->hasOne(Person::class);
     }

     public function rolEntidad(){
        return isset($this->entidad) ? $this->entidad->rol : $this->persona->rol;
        // $this->person->rol
    }

    public function nombre(){
        return isset($this->entidad) ? $this->entidad->name : $this->persona->nombres;
    }

    public function IdEntidad(){
        return isset($this->entidad) ? $this->entidad->id : false;
    }
}
