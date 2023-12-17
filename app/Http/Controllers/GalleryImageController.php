<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Http\Requests\StoreGalleryImageRequest;
use App\Http\Requests\UpdateGalleryImageRequest;
use Illuminate\Support\Facades\Storage;

class GalleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryImageRequest $request)
    {
        //
        $data = new GalleryImage();
        $data->gallery_id = $request->gallery_id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $data->image = $imagePath;
        }

        $data->save();

        return redirect()->route('galleries.edit', ['gallery' => $data->gallery_id])
            ->with('success', 'Gallery created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryImage $galleryImage)
    {
        //
        $path = storage_path('app/' . $galleryImage->image);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryImage $galleryImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryImageRequest  $request
     * @param  \App\Models\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryImageRequest $request, GalleryImage $galleryImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryImage $galleryImage)
    {
        //
        if ($galleryImage->image) {
            Storage::delete($galleryImage->image);
        }
    
        $galleryImage->delete();

        return redirect()->route('galleries.edit', ['gallery' => $galleryImage->gallery_id])
            ->with('success', 'Gallery deleted successfully');
    }
}
