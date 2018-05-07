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
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ForumController@index')->name('forum.index');
Route::get('/forums/{forum}','ForumController@show')->name('forums.show');
Route::post('/forums','ForumController@store')->name('forums.store');
Route::get('posts/{post}','PostsController@show')->name('posts.show');
Route::post('/posts','PostsController@store');
Route::post('/replies','ReplyController@store');

