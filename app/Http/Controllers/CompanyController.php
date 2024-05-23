<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\CompanyProfile;
use App\Models\ContactUs;
use App\Models\Team;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = ContactUs::first();
        $company = CompanyProfile::first();
        $teams = Team::all();
        $achievements = Achievement::orderByDesc('id')->get();
        return view('user.company.company', ['contact' => $contact, 'company' => $company, 'teams' => $teams, 'achievements' => $achievements]);
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
