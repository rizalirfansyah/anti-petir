<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        //
        $articles = Article::paginate(12);
        $tags = Tag::all();
        return view('admin.articles.index', compact('articles', 'tags'));
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
        $data->category = $request->category;
        $data->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $data->image = $imagePath;
        }

        $data->save();

        if ($request->filled('tag')) {
            $tagNames = explode(',', $request->tag[0]);
            
            foreach ($tagNames as $tagName) {
                $tag = new Tag([
                    'name' => trim($tagName),
                    'article_id' => $data->id,
                ]);
                $tag->save();
            }
        }

        return redirect()->route('articles.index')
            ->with('success', 'Article uploaded successfully');
    }

    public function show(Article $article)
    {
        //
        $path = storage_path('app/' . $article->image);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }

    public function edit(Article $article)
    {
        //
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
        $article->title = $request->title;
        $article->category = $request->category;
        $article->content = $request->content;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($article->image) {
                Storage::delete($article->image);
            }

            $imagePath = $request->file('image')->store('public/images');
            $article->image = $imagePath;
        }

        

        if ($request->filled('tag')) {
            
            $article->tags()->delete();
            $tagNames = explode(',', $request->tag[0]);
            
            foreach ($tagNames as $tagName) {
                $tag = new Tag([
                    'name' => trim($tagName),
                    'article_id' => $article->id,
                ]);
                $tag->save();
            }
        }

        $article->save();

        return redirect()->route('articles.index')
            ->with('success', 'Article updated successfully');
    }

    public function destroy(Article $article)
    {
        //

        foreach ($article->tags as $tag) {
            $tag->delete();
        }

        if ($article->image) {
            Storage::delete($article->image);
        }
    
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Article deleted successfully');
    }
}
