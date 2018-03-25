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

Route::get('/college', 'AdminController@GetCollegeTable');
	
Route::get('/add-college', 'AdminController@AddCollege');
Route::post('/add-college', 'AdminController@AddCollege');


Route::get('/edit-college', 'AdminController@UpdateCollege');
Route::post('/edit-college', 'AdminController@UpdateCollege');

	
Route::get('/major', 'AdminController@GetMajorTable');

Route::get('/add-major', 'AdminController@AddMajor');
Route::post('/add-major', 'AdminController@AddMajor');

Route::get('/edit-major', 'AdminController@UpdateMajor');
Route::post('/edit-major', 'AdminController@UpdateMajor');

	
Route::get('/edit-employees', 'AdminController@UpdateEmployee');
Route::post('/edit-employees', 'AdminController@UpdateEmployee');
	
Route::get('/add-employees', 'AdminController@AddEmployee');
Route::post('/add-employees', 'AdminController@AddEmployee');

Route::get('/delete-employees', 'AdminController@DeleteEmployee');


Route::get('/static', function () {
	return view('login/static');
});

Route::get('/school', 'AdminController@GetSchoolsTable');


Route::get('/edit-school', 'AdminController@UpdateSchool');
Route::post('/edit-school', 'AdminController@UpdateSchool');



Route::get('/add-school', 'AdminController@AddSchool');
Route::post('/add-school', 'AdminController@AddSchool');

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
