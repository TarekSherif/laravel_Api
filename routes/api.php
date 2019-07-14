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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("hello","PostController@hello");
Route::get("ArrayOfPosts","PostController@ArrayOfPosts");


Route::apiResource('posts', 'PostController');
// Route::apiResources([
//     'photos' => 'PhotoController',
//     'posts' => 'PostController'
// ]);
// Route::resource('post', 'PostController')->except(['create', 'edit']);
// Route::get("posts","PostController@index");
// Route::get("post/{id}","PostController@show");

