<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v1')->namespace('Api\v1')->group(function () {
    Route::get('/courses', 'CourseController@index');
    Route::get('/episodes', 'EpisodeController@index');
    Route::get('/courses/{courseID}', 'CourseController@single');
    Route::get('/episode/{episodeID}', 'EpisodeController@single');
    Route::post('/courses', 'CourseController@store');
    Route::post('/login', 'UserController@login');
    Route::post('/register', 'UserController@register');
    Route::get('/Search', 'CourseController@Search');
    Route::middleware('jwt.auth')->group(function () {
        Route::get('/user', 'UserController@UserInfo');
        Route::post('/comment', 'CommentController@store');
        Route::get('/user/myCourses', 'UserController@Courses');
        Route::get('/user/myCourses/{CourseID}', 'UserController@Download');
        Route::post('/Upload/image', 'UploadController@image');
        Route::post('/courses/buy/{course}/', 'BuyController@buy');
        Route::post('/courses/create', 'CourseController@create');
    });
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
