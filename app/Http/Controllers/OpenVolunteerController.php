<?php

namespace App\Http\Controllers;

use App\Models\OpenVolunteer;
use Illuminate\Http\Request;

class OpenVolunteerController extends Controller
{
    public function index()
    {
        $openVolunteers = OpenVolunteer::orderByDesc('id')->get();
        return view('user.volunteer.open-volunteers', ['openVolunteers' => $openVolunteers]);
    }

    public function show(OpenVolunteer $openVolunteer)
    {
        return view('user.volunteer.open-volunteer-details', compact('openVolunteer'));
    }
}
