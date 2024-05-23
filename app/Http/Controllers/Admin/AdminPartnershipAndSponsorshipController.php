<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnershipAndSponsorshipRequest;
use App\Models\PartnershipAndSponsorship;
use Illuminate\Http\Request;

class AdminPartnershipAndSponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnership = PartnershipAndSponsorship::all();
        return view('admin.partnership.index', ['partnership' => $partnership]);
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
    public function store(PartnershipAndSponsorshipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partnership = PartnershipAndSponsorship::findOrFail($id);
        return view('admin.partnership.edit-partnership', ['partnership' => $partnership]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnershipAndSponsorshipRequest $request, string $id)
    {
        $partnership = PartnershipAndSponsorship::findOrFail($id);
        $partnership->update($request->all());

        return redirect('/admin/partnership');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
