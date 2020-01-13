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

Route::get('/', 'CourseController@index');
Route::get('/update', 'CourseController@UpdatePic');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('user/profile', 'UserController@profile');
    Route::get('Admin/', 'AdminController@index');
    Route::get('Admin/Createnew', 'AdminController@create');
    Route::post('Admin/Createnew', 'AdminController@SendToDB');
    Route::get('Admin/Courses', 'AdminController@Posts');
    Route::get('Admin/Courses/{CourseID}', 'AdminController@show');
    Route::get('Admin/Courses/{CourseID}/edit', 'AdminController@edit');
    Route::put('Admin/Courses/{CourseID}', 'AdminController@update');
});
Route::get('/home', 'HomeController@index')->name('home');
