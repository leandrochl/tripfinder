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
    return redirect()->route('site.home');
});
Route::get('/home', function () {
    return view('site.home');
})->name('site.home');

Route::get('/admin/dashboard', 'DashboardController@index')->name('admin.dashboard');

Route::get('/admin/paginas/homepage', 'PageHomepageController@index')->name('admin.paginas.homepage');
Route::get('/admin/paginas/homepage/novo', 'PageHomepageController@novoPontoTuristico')->name('novo.pontoTuristico');
Route::post('/admin/paginas/homepage/salvar', 'PageHomepageController@salvarPontoTuristico')->name('salvar.pontoTuristico');
Route::get('/admin/paginas/homepage/editar/{id}', 'PageHomepageController@editarPontoTuristico')->name('editar.pontoTuristico');
Route::post('/admin/paginas/homepage/update/{id}', 'PageHomepageController@updatePontoTuristico')->name('update.pontoTuristico');
Route::get('/admin/paginas/homepage/delete/{id}', 'PageHomepageController@deletePontoTuristico')->name('delete.pontoTuristico');

Auth::routes();
