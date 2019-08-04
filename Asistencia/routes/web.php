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

Route::get('inicio', ["as" => "route.inicio", "uses" => "ControlController@index"]);
Route::get('menu', ["as" => "route.menu", "uses" => "ControlController@menu"]);
Route::get('registrar', ["as" => "route.registrar", "uses" => "ControlController@registrar"]);
Route::get('registrado', ["as" => "route.registrado", "uses" => "ControlController@registrado"]);
Route::get('registrar', ["as" => "route.registrar", "uses" => "ControlController@store"]);

