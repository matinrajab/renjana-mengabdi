<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValueRequest;
use App\Models\Value;
use Illuminate\Http\Request;

class AdminValueController extends Controller
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
        return view('admin.home.add-value');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValueRequest $request)
    {
        Value::create($request->all());

        return redirect('/admin/homepage/edit');
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
        $value = Value::findOrFail($id);

        return view('admin.home.edit-value', ['value' => $value]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValueRequest $request, string $id)
    {
        $value = Value::findOrFail($id);
        $value->update($request->all());

        return redirect('/admin/homepage/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $value = Value::findOrFail($id);
        $value->delete();

        return redirect()->back();
    }
}
