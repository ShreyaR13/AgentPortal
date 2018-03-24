<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Country;

class CountriesController extends Controller
{
    public function getAllCountries()
    {
      $countries = Country::orderBy('country_name', 'asc')->get();
      return $countries->pluck('country_name', 'id')->toArray();
    }
}
