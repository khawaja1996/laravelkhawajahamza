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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');
Route::get('/student', 'StudentController@index');
Route::get('/admin','AllStudentController@index');

Route::get('/edit/{id}','AllStudentUpdateController@show');
Route::post('/edit/{id}','AllStudentUpdateController@edit');
Route::get('/delete/{id}','AllStudentUpdateController@destroy');


Route::get('/posts/{id}','PostInsertController@index');
Route::post('/create','PostInsertController@insert');

Route::get('/postsfetch/{id}','PostInsertController@fetch');

Route::get('/fetchposts/{id}','AllStudentUpdateController@showposts');

Route::get('/fetchposts/deleteposts/{id}','AllStudentUpdateController@destroyposts');
