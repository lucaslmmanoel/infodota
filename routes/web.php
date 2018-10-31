<?php

Route::group(['middleware' => 'auth'], function () {

    Route::resource('/leagues', 'LeaguesController');
    Route::resource('/times', 'TeamsController');
    Route::resource('/rankings', 'RankingController');
    Route::resource('/match', 'MatchController');

});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


