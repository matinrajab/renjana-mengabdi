<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Achievement;
use App\Models\CompanyProfile;
use App\Models\Team;
use App\Services\FileService;
use Illuminate\Http\Request;

class AdminCompanyController extends Controller
{
    private const DIR = 'files/company/';
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function show()
    {
        $company = CompanyProfile::first();
        $teams = Team::all();
        $achievements = Achievement::orderByDesc('id')->get();
        return view('admin.company.index', ['company' => $company, 'teams' => $teams, 'achievements' => $achievements]);
    }

    public function edit()
    {
        $company = CompanyProfile::first();
        return view('admin.company.edit-company', ['company' => $company]);
    }

    public function update(CompanyRequest $request)
    {
        $company = CompanyProfile::first();
        $file = $request->file('image');

        $company->image = $this->fileService->handleFileUpdate($file, $company->image, self::DIR);
        $company->update($request->except(['image']));

        return redirect('/admin/company');
    }
}
