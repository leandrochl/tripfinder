<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/site-pontos-turisticos', 'HomeController@getPontosTuristicos');

Route::group(['middleware' => ['auth:api']], function () {
  Route::get('/pontos-turisticos', 'PageHomepageController@getPontosTuristicos');
  Route::post('/set-pontos-turisticos', 'PageHomepageController@setPontosTuristicos'); //remove ou adiciona pontos turísticos na homepage do site
});
