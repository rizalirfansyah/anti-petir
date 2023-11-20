<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        //
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        //
        return view('tags.create');
    }

    public function store(Request $request)
    {
        //
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();

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

    public function update(Request $request, $id)
    {
        //
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();

        return redirect()->route('tags.index')->with('success', 'Tag berhasil diperbarui.');
    }

    public function destroy($id)
    {
        //
        $tag = Tag::find($id);
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Tag berhasil dihapus.');
    }
}
