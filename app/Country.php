<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // //Table nam
    // protected $table = 'countries';
    // //primary key
    // public $primaryKey = 'id';
    // //Timestamps
    // public $timestamps = true;

    //One Country has many states
    // public function state(){
    //     return $this->hasOne('App\State', 'country_id', 'id');
    // }

    //A country has many members->one to many relationships
    public function member(){
        return $this->belongsTo('App\FutureMember', 'countries_id');
    }

    // public function country_name(){
    //     return $this->hasMany('App\FutureMember');
    // }
}
