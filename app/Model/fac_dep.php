<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class fac_dep extends Model
{
    protected $table = 'fac_dep';

    protected $fillable = ['unv_fac_id','dep_id'];

    public function unv_fac(){
        return $this->belongsTo('App\Model\unv_fac','unv_fac_id' ,'id');
    }

    public function department(){
        return $this->belongsTo('App\Model\department','dep_id' ,'id');
    }

    public function dep_cours(){
        return $this->hasMany('App\Model\dep_cour','fac_dep_id' ,'id');
    }

    public function users(){
        return $this->hasMany('App\User','fac_dep_id' ,'id');
    }

    public function posts(){
        return $this->hasMany('App\Model\post','fac_dep_id' ,'id');
    }
}
