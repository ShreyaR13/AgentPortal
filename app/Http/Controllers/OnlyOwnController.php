<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;   //Using User Model to build relationship between FutureMembers and Users

class OnlyOwnController extends Controller
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

  //Index Function to display members created by logged in user
  public function index()
  {
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      return view('onlyown')->with('member', $user->member);
  }
}
