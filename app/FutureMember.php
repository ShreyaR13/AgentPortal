<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FutureMember extends Model
{
    //Table nam
    protected $table = 'future_members';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    //A member has a relationship with a user i.e. a single member belongs to a single user
    public function user(){
      return $this->belongsTo('App\User');
    }
}
