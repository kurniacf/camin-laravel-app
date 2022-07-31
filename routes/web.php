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

Route::get('/', function(){
    return view('supermarket.index');
});

/*Route::resource("/products", ProductsController::class);
Route::get("/products/{id}", [ProductsController::class, 'show']);

Route::get('/users', function () {
    return 'Welcome to users page';
});*/
