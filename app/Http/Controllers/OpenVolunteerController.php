<?php

namespace App\Http\Controllers;

use App\Models\OpenVolunteer;
use Illuminate\Http\Request;

class OpenVolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $openVolunteers = OpenVolunteer::orderByDesc('id')->get();
        return view('user.volunteer.open-volunteers', ['openVolunteers' => $openVolunteers]);
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
    public function show(OpenVolunteer $openVolunteer)
    {
        return view('user.volunteer.open-volunteer-details', compact('openVolunteer'));
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
