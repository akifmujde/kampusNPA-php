<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $table = 'department';

    protected $fillable = ['name'];

    public function fac_deps(){
        return $this->hasMany('App\Model\fac_dep','dep_id' ,'id');
    }
}
