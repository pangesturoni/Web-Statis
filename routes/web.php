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

/*contoh route
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','HomeController@welcome');


/*tugas*/

Route::get('/home','HomeController@home');

Route::get('/form', 'AuthController@form');

Route::POST('/signup', 'AuthController@signup');

/*tugas template */

Route::get('/master', function (){
    return view('adminlte.master');
});

Route::get('/data', function () {
    return view('adminlte.items.data');
});

Route::get('/datatables', function () {
    return view('adminlte.items.datatables');
});
