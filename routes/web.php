<?php
use App\Http\Controllers\ContratoController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('cliente','ClienteController');
Route::resource('contrato','ContratoController');
Route::get('/addcontrato','ContratoController@display');
Route::post('/addcontrato','ContratoController@guardar');
Route::get('/reporte','ContratoController@reporte');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
