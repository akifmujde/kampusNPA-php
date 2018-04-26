<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol(){
        return $this->belongsTo('App\Model\rol','rol_id','id');
    }

    public function university(){
        return $this->belongsTo('App\Model\university','unv_id','id');
    }

    public function unv_fac(){
        return $this->belongsTo('App\Model\unv_fac','unv_fac_id','id');
    }

    public function fac_dep(){
        return $this->belongsTo('App\Model\fac_dep','fac_dep_id','id');
    }

    public function posts(){
        return $this->hasMany('App\Model\post','user_id','id');
    }
}
