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


/*Route::get('/hello', function () {
    //return view('welcome');
    return'<h1>hello world</h1>';
    Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'this is user '. $name . '. wite an id of ' . $id;
});
});*/


Route::get('/', 'PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/team','PagesController@team'); 
Route::get('/contact','PagesController@contact');
Route::get('/test','PagesController@test');
Route::resource('posts','PostsController');
Route::post('test','UploadController@upload');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/configurar-cache', function() {
    //probaria esto primero
    $exitCode = Artisan::call('config:cache');
    //si no funciona el anterior probaria este
    //$exitCode = Artisan::call('key:generate');
});

