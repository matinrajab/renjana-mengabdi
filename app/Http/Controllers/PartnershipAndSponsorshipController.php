<?php

namespace App\Http\Controllers;

use App\Models\PartnershipAndSponsorship;
use Illuminate\Http\Request;

class PartnershipAndSponsorshipController extends Controller
{
    public function showPartnership()
    {
        $partnership = PartnershipAndSponsorship::find(1);
        return view('partnership.partnership', ['partnership' => $partnership]);
    }

    public function showSponsorship()
    {
        $sponsorship = PartnershipAndSponsorship::find(2);
        return view('partnership.sponsorship', ['sponsorship' => $sponsorship]);
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
