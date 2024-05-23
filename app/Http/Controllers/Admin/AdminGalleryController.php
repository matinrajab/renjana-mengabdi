<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Services\FileService;
use Illuminate\Support\Facades\File;

class AdminGalleryController extends Controller
{
    private const DIR = 'files/gallery/';
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
    public function create(string $eventId)
    {
        return view('admin.event.add-gallery', ['eventId' => $eventId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request, string $eventId)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);
        $data['event_id'] = $eventId;

        Gallery::create($data);

        return redirect('/admin/events/' . $eventId);
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
        $gallery = Gallery::findOrFail($id);
        return view('admin.event.edit-gallery', ['gallery' => $gallery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryRequest $request, string $id)
    {
        $gallery = Gallery::findOrFail($id);
        $file = $request->file('image');

        $gallery->image = $this->fileService->handleFileUpdate($file, $gallery->image, self::DIR);
        $gallery->update($request->except(['image']));

        return redirect('/admin/events/' . $gallery->event_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        File::delete(self::DIR . $gallery->image);
        $gallery->delete();

        return redirect()->back();
    }
}
