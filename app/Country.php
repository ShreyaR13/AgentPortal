<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //A country has many members->one to many relationships
    public function member(){
        return $this->belongsTo('App\FutureMember', 'countries_id');
    }
}
