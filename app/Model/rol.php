<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'rol';

    protected $fillable = ['rol'];

    public function users(){
        return $this->hasMany('App\User','rol_id','id');
    }
}
