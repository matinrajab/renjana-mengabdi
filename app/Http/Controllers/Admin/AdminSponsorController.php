<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerSponsorRequest;
use App\Models\Sponsor;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminSponsorController extends Controller
{
    private const DIR = 'files/sponsor/';
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
        return view('admin.partnership.add-sponsor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerSponsorRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);

        Sponsor::create($data);

        return redirect('/admin/partnership');
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
        $sponsor = Sponsor::findOrFail($id);
        return view('admin.partnership.edit-sponsor', ['sponsor' => $sponsor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerSponsorRequest $request, string $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $file = $request->file('image');

        $sponsor->image = $this->fileService->handleFileUpdate($file, $sponsor->image, self::DIR);
        $sponsor->update($request->except(['image']));

        return redirect('/admin/partnership/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sponsor = Sponsor::findOrFail($id);

        File::delete(self::DIR . $sponsor->image);
        $sponsor->delete();

        return redirect()->back();
    }
}
