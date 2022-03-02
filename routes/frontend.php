<?php
use Illuminate\Support\Facades\Route;
Route::get('/', [
    'as' => 'frontend.index',
    'uses' => 'HomeController@index'
]);
