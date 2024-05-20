<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomepageRequest;
use App\Models\Homepage;
use App\Models\Mission;
use App\Models\Value;
use Illuminate\Http\Request;

class AdminHomepageController extends Controller
{
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
    public function show()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        $values = Value::all();
        return view('admin.home.homepage', ['home' => $home, 'missions' => $missions, 'values' => $values]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $home = Homepage::first();
        $missions = Mission::all();
        $values = Value::all();
        return view('admin.home.edit_homepage', ['home' => $home, 'missions' => $missions, 'values' => $values]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomepageRequest $request, string $id)
    {
        $home = Homepage::findOrFail($id);
        $home->update($request->all());

        return redirect('/admin/homepage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
