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

Route::get('/agent', function () {
    return view('frontend.pages.agents.index');
})->name('agent.index');

Route::get('/services', function () {
    return view('frontend.pages.services.index');
})->name('services.index');

Route::get('/properties', function () {
    return view('frontend.pages.properties.index');
})->name('properties.index');

Route::get('/blog', function () {
    return view('frontend.pages.blogs.index');
})->name('blog.index');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');