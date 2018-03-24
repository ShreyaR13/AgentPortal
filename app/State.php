<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //Table nam
    protected $table = 'states';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    //A state has a relationship with a country i.e. a single state belongs to a single country
    public function country(){
        return $this->belongsTo('App\Country');
      }
}
