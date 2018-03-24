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

Route::post('/futuremember/submit', 'FutureMemberController@submit'); //Route to add a Future Member

Route::get('/update/{id}', 'FutureMemberController@edit');  //Route to fetch member details based on the user_id selected

Route::get('/member', 'FutureMemberController@index');  //Route to display all members in the system

//Route::get('/show/{id}', 'FutureMemberController@show');

Route::get('/member/index', 'OnlyOwnController@index');   //Route to display members added by particular user

//Route::get('/showdata/{id}', 'FutureMemberController@showdata');

//Route::get('/edit/{id}', 'FutureMemberController@edit');  //Route to fetch member details based on the user_id selected

Route::put('/update/{id}', 'FutureMemberController@update');  //Route to update the Future Member Details using update method

Route::put('/destroy/{id}', 'FutureMemberController@destroy');  //Route to delete member

Route::get('/data/getCountries', 'CountriesController@getAllCountries');

Route::get('/data/getStates/{id}', 'StatesController@getAllStates');

Route::auth();

Route::get('/home', 'HomeController@index');
