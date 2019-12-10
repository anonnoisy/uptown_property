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
    return view('frontend.pages.index');
})->name('index');

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::prefix('agent')->name('agent')->group(function () {
    Route::get('/', function () {
        return view('frontend.pages.agents.index');
    })->name('.index');
    Route::get('/show', function () {
        return view('frontend.pages.agents.show');
    })->name('.show');
});

Route::get('/services', function () {
    return view('frontend.pages.services.index');
})->name('services.index');

Route::prefix('properties')->name('properties')->group(function () {
    Route::get('/', function () {
        return view('frontend.pages.properties.index');
    })->name('.index');
    Route::get('/property/show', function () {
        return view('frontend.pages.properties.show');
    })->name('.show');
});

Route::prefix('blog')->name('blog')->group(function () {
    Route::get('/', function () {
        return view('frontend.pages.blogs.index');
    })->name('.index');
    Route::get('/show', function () {
        return view('frontend.pages.blogs.show');
    })->name('.show');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');