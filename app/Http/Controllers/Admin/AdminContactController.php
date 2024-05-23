<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
use App\Services\FileService;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $contact = ContactUs::first();
        return view('admin.contact.index', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $contact = ContactUs::first();
        return view('admin.contact.edit-contact', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request)
    {
        $contact = ContactUs::first();
        $contact->update($request->all());

        return redirect('/admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
