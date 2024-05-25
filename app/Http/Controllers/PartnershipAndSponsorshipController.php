<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnershipAndSponsorship;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class PartnershipAndSponsorshipController extends Controller
{
    public function showPartnership()
    {
        $partnership = PartnershipAndSponsorship::find(1);
        $partner = Partner::orderByDesc('id')->get();
        return view('user.partnership.partnership', ['partnership' => $partnership, 'partner' => $partner]);
    }

    public function showSponsorship()
    {
        $sponsorship = PartnershipAndSponsorship::find(2);
        $sponsor = Sponsor::orderByDesc('id')->get();
        return view('user.partnership.sponsorship', ['sponsorship' => $sponsorship, 'sponsor' => $sponsor]);
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
