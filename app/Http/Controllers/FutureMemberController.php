<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\FutureMember;

use App\Country;
use App\State;
use App\ContactTime;
use App\User;   //Using User Model to build relationship between FutureMembers and Users
use DB;

class FutureMemberController extends Controller
{

    //Submit Function to add a new FututreMember in DB
    public function addFutureMember(Request $request){ 
    $this->validate($request, [     //Validations for required fields in the form
      'name' => 'required|regex:/^[\pL\s\-]+$/u',
      'email' => 'email|required',
      'contact' => 'required|numeric',
      'interested' => 'required',
      'countryInput' => 'required',
      'stateInput' => 'required'
    ]);
    

    $contact = new ContactTime;
    $contact->morning = 0;
    $contact->afternoon = 0;
    $contact->evening = 0;

    $contactArray = $request->input('contacttime');
    if($contactArray){
      if (in_array('Morning', $request->input('contacttime'), true)) {
        $contact->morning = 1;
      }
      if (in_array('Afternoon', $request->input('contacttime'), true)) {
        $contact->afternoon = 1;
      }
      if (in_array('Evening', $request->input('contacttime'), true)) {
        $contact->evening = 1;
      }
    }
    $contact->save();

    //Insert FutureMember to the DB
    $member = new FutureMember;
    $member->name = $request->input('name');
    $member->email = $request->input('email');
    $member->contact = $request->input('contact');
    $member->interested = $request->input('interested');
    $member->user_id = auth()->user()->id;    //User ID foreign key added to the future_members table
    $member->countries_id = $request->input('countryInput');
    $member->states_id = $request->input('stateInput');
    $member->contactid = $contact->id;
    
    //SAVE Member
    $member->save();

    //Redirect to Dashboard after FutureMember is added
    return redirect('/home')->with('success', 'Future Member Added');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Function to display members of logged in users in the system
    public function getListOfFutureMembers($action)
    {
      if($action=='own'){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // $member = FutureMember::orderBy('id', 'desc')->paginate(3);
        $own_member = FutureMember::where('user_id', '=', $user_id)->orderBy('id', 'desc')->paginate(3);
        // dd($own_member, $member);
        return view('member')->with('member', $own_member);
      }
      $member = FutureMember::orderBy('id', 'desc')->paginate(3);
      return view('member')->with('member', $member); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Function to display all the members in the system
    public function getListOfAllFutureMembers()
    {
      $member = FutureMember::orderBy('id', 'desc')->paginate(3);
      return view('member')->with('member', $member); 
    }

    //Function to display logged in users members
    public function yourmembers()
    {
      //$member = FutureMember::orderBy('id', 'desc')->paginate(1);
      $member = FutureMember::orderBy('id', 'desc')->get();
      //redirect to show members created by logged in users when switch turned on
      return view('onlyown')->with('member', $member);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Not in use anymore!!!
    // public function show($id)
    // {
    //     $member = FutureMember::find($id);
    //     return view('show')->with('member', $member);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Not in use anymore!!!
    // public function showdata($id)
    // {
    //     $member = FutureMember::find($id);
    //     // $userDataView = View::make('admin.photos.modal_delete')->with('member', $member);
    //     // return $userDataView->render();
    //     return $member->toJson(JSON_PRETTY_PRINT);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Function to fetch future member details for updating them
    public function fetchFutureMember($id)
    { 
      $member = FutureMember::find($id);

    //       $contact = new ContactTime;
    // $contact->morning = 0;
    // $contact->afternoon = 0;
    // $contact->evening = 0;

    // $contactArray = $request->input('contacttime');
    // if($contactArray){
    //   if (in_array('Morning', $request->input('contacttime'), true)) {
    //     $contact->morning = 1;
    //   }
    //   if (in_array('Afternoon', $request->input('contacttime'), true)) {
    //     $contact->afternoon = 1;
    //   }
    //   if (in_array('Evening', $request->input('contacttime'), true)) {
    //     $contact->evening = 1;
    //   }
    // }
    // $contact->save();
      // $country = Country::find($member->countries_id);
      // $state = State::find($member->states_id);

      // dd($member->contacttime->evening);

      
      return view('futuremember')->with('member', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateFutureMember(Request $request, $id)
    { 
      //dd($request);
      //Validation Rules for updating member details
      $this->validate($request, [
        'name' => 'required|regex:/^[\pL\s\-]+$/u',
        'email' => 'email|required',
        'contact' => 'required|numeric',
        'interested' => 'required',
        'countryInput' => 'required',
        'stateInput' => 'required'
      ]);

      //Update member
      $member = FutureMember::find($id);
      $member->name = $request->input('name');
      $member->email = $request->input('email');
      $member->contact = $request->input('contact');
      $member->interested = $request->input('interested');
      $member->countries_id = $request->input('countryInput');
      $member->states_id = $request->input('stateInput');
      // $member->contactid = $request->input('contacttime[]');



      $contact = ContactTime::find($member->contactid);
      $contact->morning = 0;
      $contact->afternoon = 0;
      $contact->evening = 0;
      $contactArray = $request->input('contacttime');

      if($contactArray){
        if (in_array('Morning', $request->input('contacttime'), true)) {
          $contact->morning = 1;
        }
        if (in_array('Afternoon', $request->input('contacttime'), true)) {
          $contact->afternoon = 1;
        }
        if (in_array('Evening', $request->input('contacttime'), true)) {
          $contact->evening = 1;
        }
      }

      $contact->save();
      //SAVE Member
      $member->save();

      //redirect to member page view after updation member details
      return redirect('/member')->with('success', 'Future Member Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Function to delete Future Member
    public function deleteFutureMember($id)
    {
      $member = FutureMember::find($id);
      $member->delete();
      return redirect('/member')->with('success', 'Future Member Deleted'); //redirect to member view after deletion
    }
}
