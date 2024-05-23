<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AchievementRequest;
use App\Models\Achievement;
use App\Services\FileService;
use Illuminate\Support\Facades\File;

class AdminAchievementController extends Controller
{
    private const DIR = 'files/achievement/';
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
        return view('admin.company.add-achievement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AchievementRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);
        $data = $this->fileService->prepareData($request, $image);

        Achievement::create($data);

        return redirect('/admin/company');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('admin.company.edit-achievement', ['achievement' => $achievement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AchievementRequest $request, string $id)
    {
        $achievement = Achievement::findOrFail($id);
        $file = $request->file('image');

        $achievement->image = $this->fileService->handleFileUpdate($file, $achievement->image, self::DIR);
        $achievement->update($request->except(['image']));

        return redirect('/admin/company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achievement = Achievement::findOrFail($id);

        File::delete(self::DIR . $achievement->image);
        $achievement->delete();

        return redirect()->back();
    }
}
