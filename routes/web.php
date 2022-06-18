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

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/', 'BemController@index');

Route::get('/departemen', 'DepartemenController@index');

Route::get('/departemen/{departemen_id}', 'DivisiController@indexDepartemen');

Route::get('/divisi', 'DivisiController@index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/beranda', function () {
      return view('admin.beranda');
    });

    Route::get('/beranda', 'BemController@beranda');


    // BEM

    Route::get('/manajemen/bem', 'BemController@indexAdmin');

    Route::get('/manajemen/bem/tambah', 'BemController@create');

    Route::post('/manajemen/bem/tambah/simpan', 'BemController@store');

    Route::get('/manajemen/bem/{id}', 'BemController@edit');

    Route::post('/manajemen/bem/ubah/{id}', 'BemController@update');

    Route::get('/manajemen/bem/hapus/{id}', 'BemController@destroy');


    // DEPARTEMEN

    Route::get('/manajemen/departemen', 'DepartemenController@indexAdmin');

    Route::get('/manajemen/departemen/tambah', 'DepartemenController@create');

    Route::post('/manajemen/departemen/tambah/simpan', 'DepartemenController@store');

    Route::get('/manajemen/departemen/{id}', 'DepartemenController@edit');

    Route::post('/manajemen/departemen/ubah/{id}', 'DepartemenController@update');

    Route::get('/manajemen/departemen/hapus/{id}', 'DepartemenController@destroy');


    // DIVISI
    Route::get('/manajemen/divisi', 'DivisiController@indexAdmin');

    Route::get('/manajemen/divisi/tambah', 'DivisiController@create');

    Route::post('/manajemen/divisi/tambah/simpan', 'DivisiController@store');

    Route::get('/manajemen/divisi/{id}', 'DivisiController@edit');

    Route::post('/manajemen/divisi/ubah/{id}', 'DivisiController@update');

    Route::get('/manajemen/divisi/hapus/{id}', 'DivisiController@destroy');


});