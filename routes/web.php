<?php

use Illuminate\Support\Facades\Route;
$url_root = 'App\Http\Controllers';
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

Route::post('/api/security/registrar', $url_root.'\Security\UserController@registrar');
Route::post('/api/security/login', $url_root.'\Security\UserController@login');
