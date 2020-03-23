<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntrepriseModel extends Model
{
    protected $guarded = [];

    public function clients()
    {
       return $this->hasMany('App\ClientModel');
    }
}
