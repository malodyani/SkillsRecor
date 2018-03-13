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
Route::get('/AddCourse', 'HomeController@AddCourse');
Route::post('/AddCourse', 'HomeController@AddCourse');

//Actitiviy 
Route::get('/AddActivity', 'HomeController@AddActivity');
Route::post('/AddActivity', 'HomeController@AddActivity');


Route::get('/EditAward', 'HomeController@EditAward');
Route::get('/DeleteAward', 'HomeController@DeleteAward');
Route::post('/SaveAward', 'HomeController@EditAward');
Route::get('/AddAward', 'HomeController@AddAward');
Route::post('/AddAward', 'HomeController@AddAward');


Route::post('/AjaxCollege', 'HomeController@AjaxCollege');

//GetMajors
