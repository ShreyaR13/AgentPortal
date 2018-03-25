<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use App\FutureMember;

class State extends Model
{
    // //Table nam
    // protected $table = 'states';
    // //primary key
    // public $primaryKey = 'id';
    // //Timestamps
    // public $timestamps = true;

    //A state has a relationship with a country i.e. a single state belongs to a single country
    // public function country(){
    //     return $this->hasOne('App\Country', 'id', 'country_id');
    // }
    
    //A state has many members->one to many relationships
    public function member(){
        return $this->belongsTo('App\FutureMember', 'states_id');
    }
}
