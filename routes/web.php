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

Route::get('/', function () {
    return view('layouts.home.home');
});
Route::get('home', function () {
    return view('Templates.templatehome');
});
Route::get('homeportafolio', function () {
    return view('layouts.home.home');
});
Route::get('biografia', function () {
    return view('layouts.home.biografia');
});
Route::get('contacto', function () {
    return view('layouts.home.contacto');
});
Route::get('folio', function () {
    return view('layouts.home.folio');
});