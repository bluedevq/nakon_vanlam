<?php
use Illuminate\Support\Facades\Route;
Route::get('/', [
    'as' => 'home.index',
    'uses' => 'HomeController@index'
]);
Route::get('/product/{id}', [
    'as' => 'frontend.product.show',
    'uses' => 'ProductController@show'
]);
Route::get('contact', [
    'as' => 'contact.index',
    'uses' => 'ContactController@index'
]);
Route::get('about', [
    'as' => 'about.index',
    'uses' => 'ContactController@index'
]);
