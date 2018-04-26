<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class dep_cour extends Model
{
    protected $table = 'dep_cour';

    protected $fillable = ['fac_dep_id','cour_id'];

    public function fac_dep(){
        return $this->belongsTo('App\Model\fac_dep','fac_dep_id' ,'id');
    }

    public function course(){
        return $this->belongsTo('App\Model\course','cour_id' ,'id');
    }

    public function posts(){
        return $this->hasMany('App\Model\posts','dep_cour_id' ,'id');
    }
}
