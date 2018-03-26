<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use App\FutureMember;

class State extends Model
{
    //A state has many members->one to many relationships
    public function member(){
        return $this->belongsTo('App\FutureMember', 'states_id');
    }
}
