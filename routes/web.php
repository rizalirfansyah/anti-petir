<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BrochureController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PlanController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferenceController;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Plan;
use App\Models\Reference;
use Illuminate\Support\Facades\Storage;

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
    $articles = Article::all();
    $references = Reference::all();
    
    return view('welcome', ['articles' => $articles, 'references' => $references]);

})->name('welcome');

Route::get('/referensi', function () {
    $references = Reference::all();

    return view('referensi', ['references' => $references]);
})->name('referensi');

Route::get('/produk', function () {
    $articles = Article::paginate(12);

    return view('produk', ['articles' => $articles]);
})->name('produk');

Route::get('/produk-detail', function () {
    $articles = Article::all();

    return view('produk-detail', ['articles'=> $articles]);
})->name('produk-detail');

Route::get('/kontak', function () {
    $contacts = Contact::all();

    return view('contact', ['contacts' => $contacts]);
})->name('kontak');

Route::get('/galeri', function () {
    $galleries = Gallery::all();

    return view('galeri', ['galleries' => $galleries]);
})->name('galeri');

Route::get('/penawaran', function () {
    return view('penawaran');
})->name('penawaran');

Route::get('/perencanaan', function () {
    $plans = Plan::all();

    return view('perencanaan', ['plans' => $plans]);
})->name('perencanaan');


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

    Route::resource('articles', ArticleController::class);
    Route::resource('offers', OfferController::class);
    Route::resource('references', ReferenceController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('images', ImageController::class);
    Route::resource('brochures', BrochureController::class);

});
