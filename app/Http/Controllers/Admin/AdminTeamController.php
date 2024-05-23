<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Services\FileService;
use Illuminate\Support\Facades\File;

class AdminTeamController extends Controller
{
    private const DIR = 'files/team/';
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
        return view('admin.company.add-team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);
        $data = $this->fileService->prepareData($request, $image);

        Team::create($data);

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
        $team = Team::findOrFail($id);
        return view('admin.company.edit-team', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, string $id)
    {
        $team = Team::findOrFail($id);
        $file = $request->file('image');

        $team->image = $this->fileService->handleFileUpdate($file, $team->image, self::DIR);
        $team->update($request->except(['image']));

        return redirect('/admin/company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);

        File::delete(self::DIR . $team->image);
        $team->delete();

        return redirect()->back();
    }
}
