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

Route::get('/', 'HomeController@index');
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('now', function () {
//     return date("Y-m-d H:i:s");
// });

Auth::routes();

//articles.blade.php as article page 
// Route::get('/articles', 'HomeController@index');
//china way(up is winnie's way)
// Route::get('/articles', 'HomeController@index')->name('articles');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    // Route::get('articles', 'ArticleController@index');
    Route::resource('article', 'ArticleController');
});
