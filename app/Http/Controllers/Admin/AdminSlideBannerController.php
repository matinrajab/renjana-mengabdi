<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideBannerRequest;
use App\Models\SlideBanner;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminSlideBannerController extends Controller
{
    private const DIR = 'files/slide_banner/';
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
        $banners = SlideBanner::orderByDesc('id')->get();
        return view('admin.slide_banner.index', ['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slide_banner.add-banner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SlideBannerRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);
        SlideBanner::create($data);

        return redirect('/admin/slide-banner');
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
        $banner = SlideBanner::findOrFail($id);
        return view('admin.slide_banner.edit-banner', ['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SlideBannerRequest $request, string $id)
    {
        $banner = SlideBanner::findOrFail($id);
        $file = $request->file('image');

        $banner->image = $this->fileService->handleFileUpdate($file, $banner->image, self::DIR);
        $banner->update($request->except(['image']));

        return redirect('/admin/slide-banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = SlideBanner::findOrFail($id);

        File::delete(self::DIR . $banner->image);
        $banner->delete();

        return redirect()->back();
    }
}
