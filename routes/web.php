<?php

use App\Http\Controllers\Controleproduto;

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

Route::get('/user', [Controleproduto::class, 'index']);
Route::get('/user/adicionar', [Controleproduto::class, 'adicionar']);
Route::post('/user/adicionar', [Controleproduto::class, 'store']);
