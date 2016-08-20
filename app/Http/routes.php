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

//this is a basic route
Route::get('/', function () {
    return view('welcome');  //looks for welcome.blade.php view to render for root route
});

//this is a named route
Route::get('about', [
    'as' => 'about',
    'uses' => 'PagesController@getAbout'  //specifying the controller and method for this route
]);

Route::get('contact', function () {
    return view('pages.contact');
});
