<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferenceController;

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

Route::get('/referensi', function () {
    return view('referensi');
})->name('referensi');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('contact', function () {
    return view('contact');
});

Route::get('galeri', function () {
    return view('galeri');
});

Route::get('penawaran', function () {
    return view('penawaran');
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
    Route::get('/brosur', function () {
        return view('admin.brosur');
    })->name('brosur');
    Route::get('/portfolio', function () {
        return view('admin.portfolio');
    })->name('portfolio');

    Route::resource('references', ReferenceController::class);
    Route::resource('articles', ArticleController::class);
    
    Route::get('/contactus', function () {
        return view('admin.contactus');
    })->name('contactus');
    Route::get('/inbox', function () {
        return view('admin.inbox');
    })->name('inbox');
});
