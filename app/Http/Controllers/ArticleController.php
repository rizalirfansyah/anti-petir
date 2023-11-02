<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    
    public function index()
    {
        //
        $articles = Article::all();

        return view('admin.artikel', ['articles' => $articles]);
    }

    public function create()
    {
        //
    }

    public function store(StoreArticleRequest $request)
    {
        //
        $file = new Article();
        $file->title = $request->input('title');
        $file->content = $request->input('content');
        $file->category = $request->input('category');
        $file->image_type = $request->file('file')->getClientMimeType();
        $file->image_data = file_get_contents($request->file('file'));

        $file->save();
        
        return redirect()->route('articles.index')
            ->with('success', 'Berhasil DiTambahkan!');
    }

    public function show(Article $article)
    {
        //

        $file = Article::find($article->id);

        if (!$file) {
            abort(404);
        }

        return response($file->image_data)
            ->header('Content-Type', $file->image_type);
    }

    public function edit(Article $article)
    {
        //
        return view('produk-detail', ['article' => $article]);
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
        $article->update($request->validated());
        
        return redirect()->route('articles.index')
            ->with('success', 'Berhasil DiUpdate!');
    }

    public function destroy(Article $article)
    {
        //
        $article->delete();
        
        return redirect()->route('articles.index')
            ->with('success', 'Berhasil Dihapus!');
    }
}
