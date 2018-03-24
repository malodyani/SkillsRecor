<?php

use Illuminate\Support\Facades\Auth;

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



Route::get('/profile', 'HomeController@Profile');
Route::post('/profile', 'HomeController@Profile');


Route::get('/change-password', 'HomeController@ChangePassword');
Route::post('/change-password', 'HomeController@ChangePassword');

Route::get('/employees', 'AdminController@EmployeesTable');


Route::get('/content', function () {
	if(Auth::user()->role == App\Misc\Roles::$Admin)
	return view('login/admin/content');
	else return redirect('/Home');
});



Route::get('/edit-home', function () {
	return view('login/admin/edit-home');
});




Route::get('/search', function () {
	return view('login/employees/search');
});


Route::get('/records', function () {
	return view('login/employees/records');
});

Route::get('/edit-student', function () {
	return view('login/employees/edit-student');
});


Route::get('/college', function () {
	return view('login/admin/college/college');
});

Route::get('/add-college', function () {
	return view('login/admin/college/add-college');
});



Route::get('/add-major', function () {
	return view('login/admin/major/add-major');
});
Route::get('/edit-major', function () {
	return view('login/admin/major/edit-major');
});
Route::get('/major', function () {
	return view('login/admin/major/major');
});



Route::get('/add-employees', function () {
	return view('login/admin/employees/add-employees');
});
Route::get('/edit-employees', function () {
	return view('login/admin/employees/edit-employees');
});




Route::get('/school', function () {
	return view('login/admin/school/school');
});
Route::get('/add-school', function () {
	return view('login/admin/school/add-school');
});
Route::get('/edit-school', function () {
	return view('login/admin/school/edit-school');
});



Route::get('/logout', function () {
	
	Auth::logout();
	return redirect('/');
});

Route::get('/home', 'HomeController@Home');
Route::get('/Home', 'HomeController@Home');



Route::get('/print-SkillsRecord', 'HomeController@printSkillsRecord');




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
