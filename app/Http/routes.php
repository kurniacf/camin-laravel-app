<?php
use Illuminate\Support\Facades\Route;


Route::get('/', [
    'uses' => 'ProductsController@getIndex',
    'as' => 'product.index'
]);
