<?php

namespace App\Http\Controllers;

use App\Models\Brochure;
use App\Http\Requests\StoreBrochureRequest;
use App\Http\Requests\UpdateBrochureRequest;
use Illuminate\Support\Facades\Storage;

class BrochureController extends Controller
{
    public function index()
    {
        $brochures = Brochure::paginate(12);
        return view('admin.brochures.index', compact('brochures'));
    }

    public function create()
    {
        // Return the view to create a new brochure
        return view('brochures.create');
    }

    public function store(StoreBrochureRequest $request)
    {
        $data = new Brochure();
        $data->name = $request->name;

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('public/files');
            $data->file = $filePath;
        }

        $data->save();

        return redirect()->route('brochures.index')
            ->with('success', 'Brochure created successfully');
    }

    public function show(Brochure $brochure)
    {
        $path = storage_path('app/' . $brochure->file);

        if (file_exists($path)) {
            return response()->file($path, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $brochure->name . '"'
            ]);
        } else {
            abort(404);
        }
    }

    public function edit(Brochure $brochure)
    {
        return view('brochures.edit', compact('brochure'));
    }

    public function update(UpdateBrochureRequest $request, Brochure $brochure)
    {
        $brochure->name = $request->name;

        if ($request->hasFile('file')) {
            if ($brochure->file) {
                Storage::delete($brochure->file);
            }

            $filePath = $request->file('file')->store('public/files');
            $brochure->file = $filePath;
        }
        $brochure->save();

        return redirect()->route('brochures.index')
            ->with('success', 'Brochure updated successfully');
    }

    public function destroy(Brochure $brochure)
    {
        if ($brochure->file) {
            Storage::delete($brochure->file);
        }
    
        $brochure->delete();

        return redirect()->route('brochures.index')
            ->with('success', 'Brochure deleted successfully');
    }
}
