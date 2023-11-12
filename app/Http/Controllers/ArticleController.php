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
        $articles = Article::paginate(12);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        //
    }

    public function store(StoreArticleRequest $request)
    {
        //
        $data = new Article();
        $data->title = $request->title;
        $data->content = $request->content;
        $data->category = $request->category;
        $data->file_type = $request->file('file')->getClientMimeType();
        $data->file_data = file_get_contents($request->file('file'));

        $data->save();
        
        return redirect()->route('articles.index')
            ->with('success', 'Berhasil DiTambahkan!');
    }

    public function show(Article $article)
    {
        //

        $data = Article::find($article->id);

        if (!$data) {
            abort(404);
        }

        return response($data->file_data)
            ->header('Content-Type', $data->file_type);
    }

    public function edit(Article $article)
    {
        //
        return view('produk-detail', ['article' => $article]);
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
        ];
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $data['file_type'] = $file->getClientMimeType();
            $data['file_data'] = file_get_contents($file);
        }
    
        $article->update($data);
        
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
