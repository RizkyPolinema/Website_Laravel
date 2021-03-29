<?php

use Illuminate\Support\Facades\Route;

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
// praktikum 10 pengenalan
Route::get('hallo', function () { return "Hallo, Anda sedang mencoba Routing di Laravel"; }); 
// tambahkan no 3 prak 2 job 10
// Route::get('profil', function () { return view('profil'); }); 
// tambahkan no 2 prak 3 job 10
Route::get('profil', 'CobaController@profil'); 
// tambahkan no 1 prak 4 job 10
Route::get('biodata', 'BiodataController@index');