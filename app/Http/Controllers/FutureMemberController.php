<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\FutureMember;

class FutureMemberController extends Controller
{

    public function submit(Request $request){
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'contact' => 'required'
    ]);

    //add member
    $member = new FutureMember;
    $member->name = $request->input('name');
    $member->email = $request->input('email');
    $member->contact = $request->input('contact');
    $member->interested = $request->input('interested');
    $member->state = $request->input('state');
    $member->city = $request->input('city');
    $member->user_id = auth()->user()->id;

    //SAVE Member
    $member->save();

    //redirect
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
    public function index()
    {
      $member = FutureMember::orderBy('id', 'desc')->paginate(3);
      //$member = FutureMember::orderBy('created_at', 'desc')->get();
      return view('member')->with('member', $member);
    }

    public function yourmembers()
    {
      //$member = FutureMember::orderBy('id', 'desc')->paginate(1);
      $member = FutureMember::orderBy('created_at', 'desc')->get();
      return view('onlyown')->with('member', $member);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = FutureMember::find($id);
        return view('show')->with('member', $member);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdata($id)
    {
        $member = FutureMember::find($id);
        // $userDataView = View::make('admin.photos.modal_delete')->with('member', $member);
        // return $userDataView->render();
        return $member->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $member = FutureMember::find($id);
          return view('futuremember')->with('member', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'contact' => 'required'
      ]);

      //add member
      $member = FutureMember::find($id);
      $member->name = $request->input('name');
      $member->email = $request->input('email');
      $member->contact = $request->input('contact');
      $member->interested = $request->input('interested');
      $member->state = $request->input('state');
      $member->city = $request->input('city');

      //SAVE Member
      $member->save();

      //redirect
      return redirect('/member')->with('success', 'Future Member Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $member = FutureMember::find($id);
      $member->delete();
      return redirect('/member')->with('success', 'Future Member Deleted');
    }
}
