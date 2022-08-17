<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [
    'uses' => 'ProductsController@getIndex',
    'as' => 'product.index'
]);

Route::group(['prefix' => 'user'], function(){
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/login', [
            'uses' => 'UserController@getLogin',
            'as' => 'user.login'
        ]);

        Route::post('/login', [
            'uses' => 'UserController@postLogin',
            'as' => 'user.login'
        ]);
    });

    Route::group(['middleware' => 'guest'], function(){
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });
});
