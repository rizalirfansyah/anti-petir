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
use App\Http\Controllers\TagController;
use App\Http\Controllers\CKEditorController;
use App\Models\Brochure;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Offer;
use App\Models\Plan;
use App\Models\Reference;
use App\Models\Tag;
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
    $tags = Tag::select('name')
        ->distinct()
        ->get();
    
    return view('welcome', ['articles' => $articles, 'references' => $references, 'tags' => $tags]);

})->name('welcome');

Route::get('/referensi', function () {
    $references = Reference::all();

    return view('referensi', ['references' => $references]);
})->name('referensi');

Route::get('/produk', function () {
    $articles = Article::paginate(12);
    $all_articles = Article::all();
    $brochures = Brochure::all();
    $tags = Tag::select('name')
        ->distinct()
        ->get();

    return view('produk', ['articles' => $articles, 'all_articles'=> $all_articles, 'brochures'=> $brochures, 'tags'=> $tags]);
})->name('produk');

Route::get('/produk-detail/{articleName}', function ($articleName) {
    $article = Article::where('title', $articleName)->first();

    $tags = Tag::select('name')
        ->distinct()
        ->get();
    
    $brochures = Brochure::all();
    $all_articles = Article::all();

    return view('produk-detail', [
        'article'=> $article,
        'all_articles'=> $all_articles,
        'tags'=> $tags,
        'brochures'=> $brochures
    ]);
})->name('produk-detail');

Route::get('/tag/{tagName}', function ($tagName) {
    $articles = Article::whereHas('tags', function ($query) use ($tagName) {
        $query->where('name', $tagName);
    })->paginate(12);

    $tags = Tag::select('name')
        ->distinct()
        ->get();
    
    $brochures = Brochure::all();
    $all_articles = Article::all();

    return view('produk', [
        'articles'=> $articles,
        'all_articles'=> $all_articles,
        'tags'=> $tags,
        'brochures'=> $brochures
    ]);
})->name('produk-tag');



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

Route::get('ckeditor', [CKEditorController::class, 'index']);
Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    Route::get('/dashboard', function () {
        $offers = Offer::paginate(12);
        $countArticles = Article::count();
        $countOffers = Offer::count();
        $countReferences = Reference::count();

        return view('admin.dashboard', compact('offers', 'countArticles', 'countOffers', 'countReferences'));
    })->name('dashboard');

    Route::resource('articles', ArticleController::class)
        ->except(['show','edit']);
    Route::resource('offers', OfferController::class)
        ->except(['store']);
    Route::resource('references', ReferenceController::class)
        ->except(['show']);
    Route::resource('galleries', GalleryController::class)
        ->except(['show']);
    Route::resource('plans', PlanController::class)
        ->except(['show']);
    Route::resource('contacts', ContactController::class);
    Route::resource('images', ImageController::class)
        ->except(['show']);
    Route::resource('brochures', BrochureController::class)
        ->except(['show']);
    Route::resource('tags', TagController::class);

});

Route::get('/articles/{article}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');

Route::get('/references/{reference}', [ReferenceController::class, 'show'])
    ->name('references.show');

Route::get('/galleries/{gallery}', [GalleryController::class, 'show'])
    ->name('galleries.show');

Route::get('/plans/{plan}', [PlanController::class, 'show'])
    ->name('plans.show');

Route::get('/images/{image}', [ImageController::class, 'show'])
    ->name('images.show');

Route::post('/offers', [OfferController::class, 'store'])
    ->name('offers.store');

Route::get('/brochures/{brochure}', [BrochureController::class, 'show'])
    ->name('brochures.show');