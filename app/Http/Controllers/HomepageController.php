<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Homepage;
use App\Models\Mission;
use App\Models\SlideBanner;
use App\Models\Value;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        $values = Value::all();
        $events = Event::orderByDesc('id')->limit(3)->get();
        $blogs = Blog::orderByDesc('id')->limit(3)->get();
        $banners = SlideBanner::all();
        return view('user.home.index', ['home' => $home, 'missions' => $missions, 'values' => $values, 'events' => $events, 'blogs' => $blogs, 'banners' => $banners]);
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
    public function show(Homepage $homepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Homepage $homepage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Homepage $homepage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Homepage $homepage)
    {
        //
    }
}
