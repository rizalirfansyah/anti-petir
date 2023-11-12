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
        $data->logo_name = $request->input('logo_name');
        $data->file_type = $request->file('file')->getClientMimeType();
        $data->file_data = file_get_contents($request->file('file'));

        $data->save();
        
        return redirect()->route('references.index')
            ->with('success', 'Berhasil DiTambahkan!');
    }

    
    public function show(Reference $reference)
    {
        //
        $data = Reference::find($reference->id);

        if (!$data) {
            abort(404);
        }

        return response($data->file_data)
            ->header('Content-Type', $data->file_type);
    }

    
    public function edit(Reference $reference)
    {
        //
    }

    
    public function update(UpdateReferenceRequest $request, Reference $reference)
    {
        //
        $data = [
            'logo_name' => $request->input('logo_name'),
        ];
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $data['file_type'] = $file->getClientMimeType();
            $data['file_data'] = file_get_contents($file);
        }

        $reference->update($data);
        
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
