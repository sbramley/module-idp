<?php

//\Illuminate\Support\Facades\Auth::routes();

Route::group(
    [
        'namespace' => 'TMS\IDP\Controllers',
        'middleware' => ['web']
    ],
    function()
{
    Route::get('/home', 'HomeController@index')->name('home');

    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    if ($options['register'] ?? true) {
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');
    }
});



