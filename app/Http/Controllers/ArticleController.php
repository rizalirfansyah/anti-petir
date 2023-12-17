<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\ArticleTag;
use App\Models\Tag;
use App\Models\Brochure;
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
            $tags = explode(',', $request->tag[0]);
            
            foreach ($tags as $tagId) {
                $tag = new ArticleTag([
                    'article_id' => $data->id,
                    'tag_id' => trim($tagId),
                ]);
                $tag->save();
            }
        }

        return redirect()->route('articles.index')
            ->with('success', 'Article uploaded successfully');
    }

    public function show(Article $article)
    {
        $tags = Tag::select('name')
        ->distinct()
        ->get();
        $brochures = Brochure::all();
        $all_articles = Article::all();

        return view('produk-detail', compact('article', 'brochures', 'all_articles', 'tags'));
    }

    public function edit(Article $article)
    {
        //
        $path = storage_path('app/' . $article->image);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404);
        }
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
            $article->article_tags()->delete();
            $tags = explode(',', $request->tag[0]);
            
            foreach ($tags as $tagId) {
                $tag = new ArticleTag([
                    'article_id' => $article->id,
                    'tag_id' => trim($tagId),
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
