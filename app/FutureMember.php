<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Country;

use App\CountactTime;

class FutureMember extends Model
{
    // //Table nam
    // protected $table = 'future_members';
    // //primary key
    // public $primaryKey = 'id';
    // //Timestamps
    // public $timestamps = true;

    //A member has a relationship with a user i.e. a single member belongs to a single user
    public function user(){
      return $this->belongsTo('App\User');
    }

    //A member has a relationship with a state i.e. a single member belongs to a single country
    public function country(){
      return $this->hasOne('App\Country', 'id', 'countries_id');
    }

    //A member has a relationship with a state i.e. a single member belongs to a single state
    public function state(){
      return $this->hasOne('App\State', 'id', 'states_id');
    }

    //A member has a relationship with a contact time
    public function contacttime(){
      return $this->hasOne('App\ContactTime', 'contactid', 'contactid');
    }
}
