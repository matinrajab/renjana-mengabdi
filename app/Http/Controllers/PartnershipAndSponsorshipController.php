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
}
