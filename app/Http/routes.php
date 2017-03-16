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
//Route::get ('/','Controller@index');
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('MexicoX','MexicoxController@mexicox');
Route::get('/login','MexicoxController@login');
Route::get ('/','MexicoxController@Home2017');
Route::get('Home2017','MexicoxController@Home2017');
Route::post('Home2017/filtrarCurso/{categoria}/{archivado}','MexicoxController@filtroCursos');
Route::post('Home2017/obtenerInstitucion/{categoria}','MexicoxController@obtenerInstituciones');
Route::post('Home2017/cursosInstitucion','MexicoxController@cursosInstitucion');
Route::post ('Home2017/buscaCurso', 'MexicoxController@buscar');

/* se desactiva el login y register de laravel*/
//Route::auth();

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
