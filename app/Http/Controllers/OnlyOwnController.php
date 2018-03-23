<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

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

  public function index()
  {
    // $member = FutureMember::orderBy('id', 'desc')->paginate(3);
    // //$member = FutureMember::orderBy('created_at', 'desc')->get();
    // return view('member')->with('member', $member);

      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      return view('onlyown')->with('member', $user->member);
  }
}
