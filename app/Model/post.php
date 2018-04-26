<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';

    protected $fillable = ['title', 'content', 'file', 'user_id', 'unv_id', 'unv_fac_id', 'fac_dep_id', 'dep_cour_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id' ,'id');
    }

    public function unviversity(){
        return $this->belongsTo('App\Model\university','unv' ,'id');
    }

    public function unv_fac(){
        return $this->belongsTo('App\Model\unv_fac','unv_fac_id' ,'id');
    }

    public function fac_dep(){
        return $this->belongsTo('App\Model\fac_dep','fac_dep_id' ,'id');
    }

    public function dep_cour(){
        return $this->belongsTo('App\Model\dep_cour','dep_cour_id' ,'id');
    }
}
