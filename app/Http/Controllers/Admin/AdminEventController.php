<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Services\FileService;
use Illuminate\Support\Facades\File;

class AdminEventController extends Controller
{
    private const DIR = 'files/event/';
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
        $events = Event::orderByDesc('id')->get();
        return view('admin.event.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.add-event');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);
        Event::create($data);

        return redirect('/admin/events');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.event-details', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.edit-event', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, string $id)
    {
        $event = Event::findOrFail($id);
        $file = $request->file('image');

        $event->image = $this->fileService->handleFileUpdate($file, $event->image, self::DIR);
        $event->update($request->except(['image']));

        return redirect('/admin/events/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);

        File::delete(self::DIR . $event->image);

        foreach ($event->galleries as $gallery) {
            File::delete('files/gallery/' . $gallery->image);
            $gallery->delete();
        }
        $event->delete();

        return redirect('/admin/events');
    }
}
