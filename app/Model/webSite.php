<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class webSite extends Model
{
    protected $table = 'webSite';

    protected $fillable = ['name'];

    public function university(){
        return $this->hasOne('App\Model\university','site_id','id');
    }
}
