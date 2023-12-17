<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\GalleryImage;
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
        Gallery::create($request->validated());

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery created successfully');
    }

    public function show(Gallery $gallery)
    {
        //
    }

    public function edit(Gallery $gallery)
    {
        $gallery_image = GalleryImage::paginate(12);
        return view('admin.galleries.edit', compact('gallery', 'gallery_image'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $gallery->update($request->validated());

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery updated successfully');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->gallery_images()->exists()) {
            foreach ($gallery->gallery_images as $image) {
                Storage::delete($image->image);
            }
            
            $gallery->gallery_images()->delete();
        }
    
        $gallery->delete();

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery deleted successfully');
    }
}
