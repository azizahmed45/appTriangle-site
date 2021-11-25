<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/job-about', function () {
    return view('job-about');
})->name('job-about');

Route::get('/microsoft', function () {
    return view('microsoft');
})->name('microsoft');

Route::get('/trend-micro', function () {
    return view('trend-micro');
})->name('trend-micro');

Route::get('/kaspersky', function () {
    return view('kaspersky');
})->name('kaspersky');

Route::get('/manage-engines', function () {
    return view('manage-engines');
})->name('manage-engines');

Route::get('/support-service', function () {
    return view('support-service');
})->name('support-service');

Route::get('/ssl', function () {
    return view('ssl');
})->name('ssl');

Route::get('/single-post', function () {
    return view('single-post');
})->name('single-post');
