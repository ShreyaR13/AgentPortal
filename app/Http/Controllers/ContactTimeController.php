<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContactTime;

class ContactTimeController extends Controller
{
  public function submit(Request $request){

  //insert into DB
  $contacttime = new ContactTime; //ContactTime->modelname
  $contacttime->morning = $request->input('morning');
  $contacttime->afternoon = $request->input('afternoon');
  $contacttime->evening = $request->input('evening');

  //SAVE Member
  $contacttime->save();

  //redirect
  //return redirect('/futuremember');
  //return 123;
}
}
