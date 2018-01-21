<?php

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

Route::get('/', function () {
    return $categories = \App\Category::select(['categories.id', 'category_translations.title', 'categories.created_at'])
        ->join('category_translations', 'categories.id', '=', 'category_translations.category_id')
        ->orderBy('categories.created_at', 'DESC')->groupBy('categories.id')->paginate(3);
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('layouts.admin-app');
});

// MediaManager
ctf0\MediaManager\MediaRoutes::routes();