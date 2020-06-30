<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@welcome_post');