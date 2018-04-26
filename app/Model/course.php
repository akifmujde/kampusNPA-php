<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';

    protected $fillable = ['name'];

    public function dep_cours(){
        return $this->hasMany('App\Model\dep_cour','cour_id' ,'id');
    }
}
