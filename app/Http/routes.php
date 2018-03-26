<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/futuremember', function () {             //Route to add a new Future Member
    return view('futuremember');
});

Route::post('/futuremember/submit', 'FutureMemberController@addFutureMember'); //Route to add a Future Member

Route::get('/update/{id}', 'FutureMemberController@fetchFutureMember');  //Route to fetch member details based on the user_id selected

Route::get('/member/{action}', 'FutureMemberController@getListOfFutureMembers');  //Route to display all members of the logged in the system

 //Route::get('/member', 'FutureMemberController@getListOfAllFutureMembers');  //Route to display all members in the system

Route::put('/update/{id}', 'FutureMemberController@updateFutureMember');  //Route to update the Future Member Details using update method

Route::put('/destroy/{id}', 'FutureMemberController@deleteFutureMember');  //Route to delete member

Route::get('/data/getCountries', 'CountriesController@getAllCountries');

Route::get('/data/getStates/{id}', 'StatesController@getAllStates');

Route::auth();

Route::get('/home', 'HomeController@index');
