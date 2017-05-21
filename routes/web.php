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

Route::get('/admin', 'PagesController@admin');

Route::get('/json', 'MotorController@json');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
    *JSON de los componentes de un drone
**/

Route::get('/elementosMotores', 'ComponentesController@jsonMotores');

Route::get('/elementosMarcos', 'ComponentesController@jsonMarcos');

Route::get('/elementosCamaras', 'ComponentesController@jsonCamaras');

Route::get('/elementosBaterias', 'ComponentesController@jsonBaterias');

Route::get('/elementosGps', 'ComponentesController@jsonGps');

Route::get('/elementosControles', 'ComponentesController@jsonControles');

/** ------------------------- ADMINISTRADOR ------------------------- **/

/**
 * Mostrar todos los motores
 */
Route::get('/motores','AdminMotorController@mostrarTodosMotores');

/**
 * Agregar un nuevo motor
 */
Route::post('/motor', 'AdminMotorController@agregarMotor');

/**
 * Update un motor existente
 */

Route::put('/motor/{id}','AdminMotorController@editarMotor');

/**
 * Mostrar la edicion de un motor
 */
Route::get('/motores/{id}','AdminMotorController@listaEdicion');


/**
 * Eliminar un motor existente
 */
Route::delete('/motor/{id}', 'AdminMotorController@eliminarMotor');

/** ----------------- MARCOS ------------**/

/**
 * Mostrar todos los marcos
 */
Route::get('/marcos','AdminMarcoController@mostrarTodosMarcos');

/**
 * Agregar un nuevo marcos
 */
Route::post('/marco', 'AdminMarcoController@agregarMarco');

/**
 * Update un marcos existente
 */

Route::put('/marco/{id}','AdminMarcoController@editarMarco');

/**
 * Mostrar la edicion de un marco
 */
Route::get('/marcos/{id}','AdminMarcoController@listaEdicionMarco');


/**
 * Eliminar un marco existente
 */
Route::delete('/marco/{id}', 'AdminMarcoController@eliminarMarco');

/** ----------------- BATERIAS ------------**/

/**
 * Mostrar todas las baterias
 */
Route::get('/baterias','AdminBateriaController@mostrarTodosBaterias');

/**
 * Agregar una nueva bateria
 */
Route::post('/bateria', 'AdminBateriaController@agregarBateria');

/**
 * Update un bateria existente
 */

Route::put('/bateria/{id}','AdminBateriaController@editarBateria');

/**
 * Mostrar la edicion de una bateria
 */
Route::get('/baterias/{id}','AdminBateriaController@listaEdicionBateria');


/**
 * Eliminar una bateria existente
 */
Route::delete('/bateria/{id}', 'AdminBateriaController@eliminarBateria');

/** ----------------- CAMARAS ------------**/

/**
 * Mostrar todas las camaras
 */
Route::get('/camaras','AdminCamaraController@mostrarTodosCamaras');

/**
 * Agregar una nueva camara
 */
Route::post('/camara', 'AdminCamaraController@agregarCamara');

/**
 * Update un camara existente
 */

Route::put('/camara/{id}','AdminCamaraController@editarCamara');

/**
 * Mostrar la edicion de una camara
 */
Route::get('/camaras/{id}','AdminCamaraController@listaEdicionCamara');


/**
 * Eliminar una camara existente
 */
Route::delete('/camara/{id}', 'AdminCamaraController@eliminarCamara');


/** ----------------- GPS ------------**/

/**
 * Mostrar todas las gps
 */
Route::get('/gpss','AdminGpsController@mostrarTodosGpss');

/**
 * Agregar una nueva gps
 */
Route::post('/gps', 'AdminGpsController@agregarGps');

/**
 * Update un gps existente
 */

Route::put('/gps/{id}','AdminGpsController@editarGps');

/**
 * Mostrar la edicion de una gps
 */
Route::get('/gpss/{id}','AdminGpsController@listaEdicionGps');


/**
 * Eliminar una gps existente
 */
Route::delete('/gps/{id}', 'AdminGpsController@eliminarGps');


/** ----------------- CONTROLES ------------**/

/**
 * Mostrar todas las controls
 */
Route::get('/controles','AdminControlController@mostrarTodosControles');

/**
 * Agregar una nueva control
 */
Route::post('/control', 'AdminControlController@agregarControl');

/**
 * Update un control existente
 */

Route::put('/control/{id}','AdminControlController@editarControl');

/**
 * Mostrar la edicion de una control
 */
Route::get('/controles/{id}','AdminControlController@listaEdicionControl');


/**
 * Eliminar una camara existente
 */
Route::delete('/control/{id}', 'AdminControlController@eliminarControl');

/** ----------------- PRECARGADOS ------------**/

/**
 * Mostrar todos los precargados
 */
Route::get('/precargados','AdminPrecargadosController@mostrarTodosPrecargados');

/**
 * Agregar un nuevo precargado
 */
Route::post('/precargado', 'AdminPrecargadosController@agregarPrecargado');

/**
 * Update un precargado existente
 */

Route::put('/precargado/{id}','AdminPrecargadosController@editarPrecargado');

/**
 * Mostrar la edicion de un precargado
 */
Route::get('/precargados/{id}','AdminPrecargadosController@listaEdicionPrecargado');


/**
 * Eliminar un precargado existente
 */
Route::delete('/precargado/{id}', 'AdminPrecargadosController@eliminarPrecargado');


Route::get('/comprobante','ComprobanteController@obtenerComprobante');

Route::get('/almacenar','AlmacenarDronController@almacenar');

Route::get('recuperar','AlmacenarDronController@recuperar');
