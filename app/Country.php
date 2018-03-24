<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //One Country has many states
    public function state(){
        return $this->hasMany('App\State');
      }
}
