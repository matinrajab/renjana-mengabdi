<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerSponsorRequest;
use App\Models\Partner;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminPartnerController extends Controller
{
    private const DIR = 'files/partner/';
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
        return view('admin.partnership.add-partner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerSponsorRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);

        Partner::create($data);

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
        $partner = Partner::findOrFail($id);
        return view('admin.partnership.edit-partner', ['partner' => $partner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerSponsorRequest $request, string $id)
    {
        $partner = Partner::findOrFail($id);
        $file = $request->file('image');

        $partner->image = $this->fileService->handleFileUpdate($file, $partner->image, self::DIR);
        $partner->update($request->except(['image']));

        return redirect('/admin/partnership/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);

        File::delete(self::DIR . $partner->image);
        $partner->delete();

        return redirect()->back();
    }
}
