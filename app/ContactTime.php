<?php

namespace App;

use App\FutureMember;

use Illuminate\Database\Eloquent\Model;

class ContactTime extends Model
{
    //Table nam
    protected $table = 'contact_times';
    //primary key
    public $primaryKey = 'contactid';
    //Timestamps
    public $timestamps = true;

    //A member has a relationship with a contact time
    public function member(){
        return $this->hasOne('App\FutureMember', 'contactid', 'contactid');
      }
}
