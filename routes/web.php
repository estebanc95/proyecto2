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

Route::get('/', 'PagesController@index');

Route::get('/quienes-somos', 'PagesController@quienesSomos');

Route::get('/json', 'MotorController@json');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/elementosMotores', 'ComponentesController@jsonMotores');

Route::get('/elementosMarcos', 'ComponentesController@jsonMarcos');

Route::get('/elementosCamaras', 'ComponentesController@jsonCamaras');

Route::get('/elementosBaterias', 'ComponentesController@jsonBaterias');

Route::get('/elementosGps', 'ComponentesController@jsonGps');

Route::get('/elementosControles', 'ComponentesController@jsonControles');

Route::get('/elementosJson', 'ProbarController@json');