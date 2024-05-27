<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CompanyProfile;
use App\Models\ContactUs;
use App\Models\Event;
use App\Models\Homepage;
use App\Models\OpenVolunteer;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $home = Homepage::first();
        $company = CompanyProfile::first();
        $contact = ContactUs::first();
        $teams = Team::limit(5)->get();
        $openVolunteers = OpenVolunteer::limit(5)->get();
        $events = Event::orderByDesc('id')->limit(3)->get();
        $blogs = Blog::orderByDesc('id')->limit(3)->get();
        return view('admin.dashboard.index', compact('home', 'company', 'contact', 'teams', 'openVolunteers', 'events', 'blogs'));
    }
}
