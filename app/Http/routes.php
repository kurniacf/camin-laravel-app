<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [
    'uses' => 'ProductsController@getIndex',
    'as' => 'product.index'
]);

Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
]);
