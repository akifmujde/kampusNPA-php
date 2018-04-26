<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class unv_fac extends Model
{
    protected $table = 'unv_fac';

    protected $fillable = ['unv_id','fac_id'];

    public function university(){
        return $this->belongsTo('App\Model\university','unv_id' ,'id');
    }

    public function faculty(){
        return $this->belongsTo('App\Model\faculty','fac_id' ,'id');
    }

    public function fac_deps(){
        return $this->hasMany('App\Model\fac_dep','unv_fac_id' ,'id');
    }

    public function users(){
        return $this->hasMany('App\User','unv_fac_id' ,'id');
    }

    public function posts(){
        return $this->hasMany('App\Model\post','unv_fac_id' ,'id');
    }
}
