<?php
use Illuminate\Support\Facades\Route;
Route::get('/', [
    'as' => 'home.index',
    'uses' => 'HomeController@index'
]);
Route::get('contact', [
    'as' => 'contact.index',
    'uses' => 'ContactController@index'
]);
Route::get('about', [
    'as' => 'about.index',
    'uses' => 'ContactController@index'
]);
