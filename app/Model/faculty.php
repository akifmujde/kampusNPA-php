<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $table = 'faculty';

    protected $fillable = ['name'];

    public function unv_facs(){
        return $this->hasMany('App\Model\unv_fac','fac_id' ,'id');
    }
}
