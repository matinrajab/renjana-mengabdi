<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\CompanyProfile;
use App\Models\ContactUs;
use App\Models\Team;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $contact = ContactUs::first();
        $company = CompanyProfile::first();
        $teams = Team::all();
        $achievements = Achievement::orderByDesc('id')->get();
        return view('user.company.company', ['contact' => $contact, 'company' => $company, 'teams' => $teams, 'achievements' => $achievements]);
    }
}
