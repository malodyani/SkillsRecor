<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'guest'], function(){
		
	Route::get('/', function () {
		return view('index');
	});
});

Route::get('/logout', function () {
	
	Auth::logout();
	return redirect('/');
});

Route::get('/home', 'HomeController@Home');
Route::get('/Home', 'HomeController@Home');


Route::get('/OpenEdit', 'HomeController@EditCourse');
Route::post('/SaveEdit', 'HomeController@EditCourse');
Route::get('/DeleteCourse', 'HomeController@DeleteCourse');

///EditAwrd
Route::get('/EditAward', 'HomeController@EditAward');
Route::get('/DeleteAward', 'HomeController@DeleteAward');


Route::post('/SaveActivity', 'HomeController@EditAward');

///SaveActivity



Route::get('/a', function () {
    return view('login/index');
});


Route::get('/add-cours', function () {
    return view('login/cours/add-cours');
});
Route::get('/add-awards', function () {
    return view('login/awards/add-awards');
});

Route::get('/add-activities', function () {
    return view('login/activities/add-activities');
});


