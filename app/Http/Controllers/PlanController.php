<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();

        if ($plans->isEmpty()) {
            // Tampilkan halaman "index" jika tidak ada data kontak
            return view('admin.plans.index', compact('plans'));
        } else {
            // Tampilkan halaman "edit" jika ada data kontak
            return view('admin.plans.edit', compact('plans'));
        }
    }

    public function create()
    {
        return view('plans.create');
    }

    public function store(StorePlanRequest $request)
    {
        Plan::create($request->validated());
        return redirect()->route('plans.index')
            ->with('success', 'Plan created successfully');
    }

    public function show(Plan $plan)
    {
        return view('plans.show', compact('plan'));
    }

    public function edit(Plan $plan)
    {
        return view('plans.edit', compact('plan'));
    }

    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        $plan->update($request->validated());
        return redirect()->route('plans.index')
            ->with('success', 'Plan updated successfully');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('plans.index')
            ->with('success', 'Plan deleted successfully');
    }
}
