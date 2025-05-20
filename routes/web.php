<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    'as' => 'home',
    'uses' => 'App\Http\Controllers\Guest\PageController@index'
]);