<?php

namespace App\Http\Controllers;

use App\Models\Brochure;
use App\Http\Requests\StoreBrochureRequest;
use App\Http\Requests\UpdateBrochureRequest;

class BrochureController extends Controller
{
    public function index()
    {
        $brochures = Brochure::all();
        return view('admin.brochures.index', compact('brochures'));
    }

    public function create()
    {
        // Return the view to create a new brochure
        return view('brochures.create');
    }

    public function store(StoreBrochureRequest $request)
    {
        Brochure::create($request->validated());

        return redirect()->route('brochures.index')
            ->with('success', 'Brochure created successfully');
    }

    public function show(Brochure $brochure)
    {
        // Display the specified brochure
        return view('brochures.show', compact('brochure'));
    }

    public function edit(Brochure $brochure)
    {
        // Return the view to edit the specified brochure
        return view('brochures.edit', compact('brochure'));
    }

    public function update(UpdateBrochureRequest $request, Brochure $brochure)
    {
        $brochure->update($request->validated());

        return redirect()->route('brochures.index')
            ->with('success', 'Brochure updated successfully');
    }

    public function destroy(Brochure $brochure)
    {
        $brochure->delete();

        return redirect()->route('brochures.index')
            ->with('success', 'Brochure deleted successfully');
    }
}
