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


Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/a', function () {
    return view('login/index');
});
Route::get('/home', function () {
    return view('login/home');
});
Route::get('/add-cours', function () {
    return view('login/cours/add-cours');
});
Route::get('/edit-cours', function () {
    return view('login/cours/edit-cours');
});
Route::get('/add-awards', function () {
    return view('login/awards/add-awards');
});

Route::get('/add-activities', function () {
    return view('login/activities/add-activities');
});

Route::get('/signup', function () {
    return view('signup');
});