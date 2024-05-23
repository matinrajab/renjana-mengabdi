<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomepageRequest;
use App\Models\Homepage;
use App\Models\Mission;
use App\Models\Value;
use App\Services\FileService;
use Illuminate\Http\Request;

class AdminHomepageController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
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
    public function show()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        $values = Value::all();
        return view('admin.home.index', ['home' => $home, 'missions' => $missions, 'values' => $values]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        $values = Value::all();
        return view('admin.home.edit-homepage', ['home' => $home, 'missions' => $missions, 'values' => $values]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomepageRequest $request)
    {
        $home = Homepage::first();

        $dir = 'files/homepage/';
        $file1 = $request->file('image_1');
        $file2 = $request->file('image_2');

        $home->image_1 = $this->fileService->handleFileUpdate($file1, $home->image_1, $dir);
        $home->image_2 = $this->fileService->handleFileUpdate($file2, $home->image_2, $dir);

        $home->update($request->except(['image_1', 'image_2']));

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
