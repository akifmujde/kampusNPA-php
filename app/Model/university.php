<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class university extends Model
{
    protected $table = 'university';

    protected $fillable = ['name'];

    public function unv_facs(){
        return $this->hasMany('App\Model\unv_fac','unv_id' ,'id');
    }

    public function users(){
        return $this->hasMany('App\User','unv_id' ,'id');
    }

    public function posts(){
        return $this->hasMany('App\Model\post','unv_id' ,'id');
    }

    public function webSite(){
        return $this->hasOne('App\Model\webSite','site_id','id');
    }
}
