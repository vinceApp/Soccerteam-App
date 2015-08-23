<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('startbootstrap.homepage');
});

Route::get('dashboard', function(){
    return view('startbootstrap.dashboard');
});

Route::controller('users', 'UsersController');
Route::controller('contact', 'ContactController');

Route::controller('photo', 'PhotoController');

Route::controller('player', 'PlayerController');

Route::controller('team', 'TeamController');

Route::controller('calendar', 'CalendarController');