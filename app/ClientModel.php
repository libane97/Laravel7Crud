<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $guarded = [];

    public function entreprise()
    {
       return $this->belongsTo('App\EntrepriseModel','Eid');
    }

    public function scopeStatus($query)
    {
       return $query->where('status',1)->get();
    }

    public function getStatusAttributes($attributes)
    {
         return [
               '0' => 'Inactif',
               '1' => 'Actif'
         ][$attributes];
    }
}

