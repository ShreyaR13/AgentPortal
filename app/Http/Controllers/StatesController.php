<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\State;

use App\Country;

class StatesController extends Controller
{
    //function to access STATES table and return state name and id before adding to DB
    public function getAllStates($id)
    {
        $states = State::where('country_id', $id)->orderBy('state_name', 'asc')->get();
        return $states->pluck('state_name', 'id')->toArray();
    }
}
