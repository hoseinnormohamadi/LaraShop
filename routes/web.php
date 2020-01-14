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
Route::get('/Details/{CourseID}', 'CourseController@Show');
Route::get('/Search', 'CourseController@Search');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('user/profile', 'UserController@profile');
    Route::get('Admin/', 'AdminController@Index');
    Route::get('Admin/Createnew', 'AdminController@Create');
    Route::post('Admin/Createnew', 'AdminController@SendToDB');
    Route::get('Admin/Courses', 'AdminController@Courses');
    Route::get('Admin/Courses/{CourseID}', 'AdminController@Show');
    Route::get('Admin/Courses/{CourseID}/edit', 'AdminController@Edit');
    Route::get('Admin/Courses/{CourseID}/edit/{EpisodeID}', 'AdminController@EditEpisode');
    Route::get('Admin/Courses/{CourseID}/Delete', 'AdminController@Delete');
    Route::put('Admin/Courses/{CourseID}/edit/{EpisodeID}', 'AdminController@UpdateEpisode');
    Route::put('Admin/Courses/{CourseID}', 'AdminController@Update');
});
Route::get('/', 'CourseController@index')->name('home');
