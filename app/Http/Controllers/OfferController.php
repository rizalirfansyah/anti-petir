<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return view('admin.offers.index', compact('offers'));
    }

    public function create()
    {
        return view('offers.create');
    }

    public function store(StoreOfferRequest $request)
    {
        Offer::create($request->validated());
        return redirect()->route('offers.index')
            ->with('success', 'Offer created successfully');
    }

    public function show(Offer $offer)
    {
        return view('offers.show', compact('offer'));
    }

    public function edit(Offer $offer)
    {
        return view('offers.edit', compact('offer'));
    }

    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        $offer->update($request->validated());
        return redirect()->route('offers.index')
            ->with('success', 'Offer updated successfully');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offers.index')
            ->with('success', 'Offer deleted successfully');
    }
}
