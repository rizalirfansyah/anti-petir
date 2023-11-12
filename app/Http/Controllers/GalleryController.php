<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(12);
        
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(StoreGalleryRequest $request)
    {
        $data = new Gallery();
        $data->name = $request->name;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/galleries');
            $data->image = $imagePath;
        }

        $data->save();

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery created successfully');
    }

    public function show(Gallery $gallery)
    {
        $path = storage_path('app/' . $gallery->image);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }

    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $gallery->name = $request->name;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gallery->image) {
                Storage::delete($gallery->image);
            }

            $imagePath = $request->file('image')->store('public/galleries');
            $gallery->image = $imagePath;
        }
        $gallery->save();

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery updated successfully');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }
    
        $gallery->delete();

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery deleted successfully');
    }
}
