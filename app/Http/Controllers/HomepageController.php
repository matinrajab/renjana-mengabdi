<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Homepage;
use App\Models\Mission;
use App\Models\OpenVolunteer;
use App\Models\SlideBanner;
use App\Models\Testimonial;
use App\Models\Value;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        $values = Value::all();
        $openVolunteers = OpenVolunteer::orderByDesc('id')->limit(3)->get();
        $events = Event::orderByDesc('id')->limit(3)->get();
        $blogs = Blog::orderByDesc('id')->limit(3)->get();
        $banners = SlideBanner::all();
        $testimonials = Testimonial::orderByDesc('id')->get();
        return view('user.home.index', compact('home', 'missions', 'values', 'openVolunteers', 'events', 'blogs', 'banners', 'testimonials'));
    }
}
