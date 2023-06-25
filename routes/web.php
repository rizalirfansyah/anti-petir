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
    return view('welcome');
})->name('welcome');

Route::get('/refrensi', function () {
    return view('refrensi');
});

Route::get('contact', function () {
    return view('contact');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/homepage', function () {
        return view('admin.homepage');
    })->name('homepage');
    Route::get('/artikel', function () {
        return view('admin.artikel');
    })->name('artikel');
    Route::get('/brosur', function () {
        return view('admin.brosur');
    })->name('brosur');
    Route::get('/portfolio', function () {
        return view('admin.portfolio');
    })->name('portfolio');
    Route::get('/contactus', function () {
        return view('admin.contactus');
    })->name('contactus');
    Route::get('/inbox', function () {
        return view('admin.inbox');
    })->name('inbox');
});
