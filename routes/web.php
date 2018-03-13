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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function () {
    return view('layouts.admin-app');
});

Route::get('proba', 'PagesController@proba');

// filemanager
Route::middleware('auth')->get('filemanager/show', 'FilemanagerController@index');

Route::post('form', 'PagesController@sendForm');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function() {
        Route::get('/', 'PagesController@index');
        Route::get('collections', 'PagesController@index');
        Route::get('collezioni', 'PagesController@index');

        Route::get('collections/{slug}', 'PagesController@collections');
        Route::get('collezioni/{slug}', 'PagesController@collections');

        Route::get('collections/{slug1}/{slug2}', 'PagesController@parentCollections');
        Route::get('collezioni/{slug1}/{slug2}', 'PagesController@parentCollections');

        Route::get('contact', 'PagesController@contact')->name('contact');
        Route::get('contatto', 'PagesController@contact')->name('contact');

        Route::get('corporate', 'PagesController@corporate')->name('corporate');
        Route::get('azienda', 'PagesController@corporate')->name('corporate');

        Route::get('partnership', 'PagesController@partnership')->name('partnership');
        Route::get('partner', 'PagesController@partnership')->name('partnership');

        Route::get('promozioni', 'PagesController@promotions')->name('promotions');
        Route::get('promotions', 'PagesController@promotions')->name('promotions');

        Route::get('news', 'PagesController@news')->name('news');

        Route::get('news/{slug}/{id}', 'PagesController@post')->name('post');

        Route::get('{slug1}/{slug2}/{id}', 'PagesController@product')->name('product');
        Route::get('{slug1}/{slug2}/{slug3}/{id}', 'PagesController@product2')->name('product2');
    }
);