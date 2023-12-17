<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        //
        $tags = Tag::paginate(12);
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        //
        return view('tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        //
        Tag::create($request->validated());
        return redirect()->route('tags.index')->with('success', 'Tag berhasil ditambahkan.');
    }

    public function show($id)
    {
        //
        $tag = Tag::find($id);
        return view('tags.show', compact('tag'));
    }

    public function edit($id)
    {
        //
        $tag = Tag::find($id);
        return view('tags.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //
        $tag->update($request->validated());

        return redirect()->route('tags.index')->with('success', 'Tag berhasil diperbarui.');
    }

    public function destroy(Tag $tag)
    {
        //
        $tag->article_tag()->delete();

        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Tag berhasil dihapus.');
    }
}
