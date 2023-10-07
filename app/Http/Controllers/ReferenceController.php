<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Http\Requests\StoreReferenceRequest;
use App\Http\Requests\UpdateReferenceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferenceController extends Controller
{
    
    public function index()
    {
        //
        $references = Reference::all();

        return view('admin.reference', ['references' => $references]);

    }

    
    public function create()
    {
        //
    }

    
    public function store(StoreReferenceRequest $request)
    {
        //
        $file = new Reference();
        $file->logo_name = $request->input('logo_name');
        $file->logo_type = $request->file('file')->getClientMimeType();
        $file->logo_data = file_get_contents($request->file('file'));

        $file->save();
        
        return redirect()->route('references.index')
            ->with('success', 'Berhasil DiTambahkan!');
    }

    
    public function show(Reference $reference)
    {
        //
        $file = Reference::find($reference->id);

        if (!$file) {
            abort(404);
        }

        return response($file->logo_data)
            ->header('Content-Type', $file->logo_type);
    }

    
    public function edit(Reference $reference)
    {
        //
    }

    
    public function update(UpdateReferenceRequest $request, Reference $reference)
    {
        //
        $reference->update($request->validated());
        
        return redirect()->route('references.index')
            ->with('success', 'Berhasil DiUpdate!');
    }

    
    public function destroy(Reference $reference)
    {
        //
        $reference->delete();
        
        return redirect()->route('references.index')
            ->with('success', 'Berhasil Dihapus!');
    }
}
