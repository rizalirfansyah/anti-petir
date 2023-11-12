<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        if ($contacts->isEmpty()) {
            // Tampilkan halaman "index" jika tidak ada data kontak
            return view('admin.contacts.index', compact('contacts'));
        } else {
            // Tampilkan halaman "edit" jika ada data kontak
            return view('admin.contacts.edit', compact('contacts'));
        }
    }

    public function create()
    {
        // Return the view to create a new contact
        return view('contacts.create');
    }

    public function store(StoreContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('contacts.index')
            ->with('success', 'Contact created successfully');
    }

    public function show(Contact $contact)
    {
        // Display the specified contact
        return view('contact', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        // Return the view to edit the specified contact
        return view('contacts.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());

        return redirect()->route('contacts.index')
            ->with('success', 'Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        //
    }
}
