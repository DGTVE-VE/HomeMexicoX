<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get ('/','Controller@index');

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('MexicoX','MexicoxController@mexicox');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin', function (){

    
        return redirect ('courseNames');
    
})->middleware('auth');
/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::resource('courseNames', 'CourseNameController');

Route::resource('categorias', 'CategoriaController');