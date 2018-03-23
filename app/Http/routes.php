<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/futuremember', function () {
    return view('futuremember');
});

Route::post('/futuremember/submit', 'FutureMemberController@submit');

Route::get('/update/{id}', 'FutureMemberController@edit');

Route::get('/member', 'FutureMemberController@index');  //Display all members->which is what we want for displaying all members->switch off!!!

Route::get('/show/{id}', 'FutureMemberController@show');

Route::get('/member/index', 'OnlyOwnController@index');   //Display members added by particular user

Route::get('/showdata/{id}', 'FutureMemberController@showdata');

Route::get('/edit/{id}', 'FutureMemberController@edit');

Route::put('/update/{id}', 'FutureMemberController@update');

Route::put('/destroy/{id}', 'FutureMemberController@destroy');

//Route::post('/contacttime/submit', 'ContactTimeController@submit');

Route::auth();

Route::get('/home', 'HomeController@index');
