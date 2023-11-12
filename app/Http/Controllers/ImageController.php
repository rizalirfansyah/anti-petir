<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::paginate(12);
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(StoreImageRequest $request)
    {
        $data = new Image();
        $data->name = $request->name;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $data->image = $imagePath;
        }

        $data->save();

        return redirect()->route('images.index')
            ->with('success', 'Image uploaded successfully');
    }

    public function show(Image $image)
    {
        $path = storage_path('app/' . $image->image);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }

    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    public function update(UpdateImageRequest $request, Image $image)
    {
        $image->name = $request->name;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($image->image) {
                Storage::delete($image->image);
            }

            $imagePath = $request->file('image')->store('public/images');
            $image->image = $imagePath;
        }
        $image->save();

        return redirect()->route('images.index')
            ->with('success', 'Image updated successfully');
    }

    public function destroy(Image $image)
    {
        if ($image->image) {
            Storage::delete($image->image);
        }
    
        $image->delete();

        return redirect()->route('images.index')
            ->with('success', 'Image deleted successfully');
    }
}
