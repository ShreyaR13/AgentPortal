<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Country;

class CountriesController extends Controller
{
    //function to access countries table and return country name and id before adding to DB
    public function getAllCountries()
    {
      $countries = Country::orderBy('country_name', 'asc')->get();
      return $countries->pluck('country_name', 'id')->toArray();
    }
}
