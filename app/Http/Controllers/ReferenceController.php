<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Http\Requests\StoreReferenceRequest;
use App\Http\Requests\UpdateReferenceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReferenceController extends Controller
{
    
    public function index()
    {
        //
        $references = Reference::paginate(12);

        return view('admin.references.index', compact('references'));

    }

    
    public function create()
    {
        //
    }

    
    public function store(StoreReferenceRequest $request)
    {
        //
        $data = new Reference();
        $data->name = $request->name;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $data->image = $imagePath;
        }

        $data->save();
        
        return redirect()->route('references.index')
            ->with('success', 'Berhasil DiTambahkan!');
    }

    
    public function show(Reference $reference)
    {
        //
        $path = storage_path('app/' . $reference->image);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }

    
    public function edit(Reference $reference)
    {
        //
    }

    
    public function update(UpdateReferenceRequest $request, Reference $reference)
    {
        //
        $reference->name = $request->name;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($reference->image) {
                Storage::delete($reference->image);
            }

            $imagePath = $request->file('image')->store('public/images');
            $reference->image = $imagePath;
        }
        $reference->save();
        
        return redirect()->route('references.index')
            ->with('success', 'Berhasil DiUpdate!');
    }

    
    public function destroy(Reference $reference)
    {
        //
        if ($reference->image) {
            Storage::delete($reference->image);
        }
    
        $reference->delete();
        
        return redirect()->route('references.index')
            ->with('success', 'Berhasil Dihapus!');
    }
}
