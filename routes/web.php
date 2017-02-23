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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('import','ImportController@index');
Route::post('import',['as'=>'import.store','uses'=>'ImportController@store']);

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/data', 'HomeController@getData');