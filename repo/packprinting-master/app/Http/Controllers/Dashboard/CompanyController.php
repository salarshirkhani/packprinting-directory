<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\CompanyCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CompanyStoreRequest;
use App\Http\Requests\Dashboard\CompanyUpdateRequest;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Company::class);
    }

    /**
     * Show the form for creating a new company.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.companies.create', [
            'categories' => CompanyCategory::all()
        ]);
    }

    /**
     * Store a newly created company in storage.
     *
     * @param CompanyStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CompanyStoreRequest $request)
    {
        $data = $request->validated();

        $company = new Company($data);
        $company->category()->associate($data['category_id']);
        $company->creator()->save(Auth::user());
        $company->logo = $request->file('logo')->store('logos', 'public');
        $company->video = $request->file('video')->store('videos', 'public');
        $company->save();

        return redirect()
            ->route('dashboard.companies.show', ['company' => $company])
            ->with('success', __('شرکت شما با موفقیت ثبت شد!'));
    }

    /**
     * Display the specified company.
     *
     * @param Company $company
     * @return View
     */
    public function show(Company $company)
    {
        return view('dashboard.companies.show', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified company.
     *
     * @param Company $company
     * @return View
     */
    public function edit(Company $company)
    {
        return view('dashboard.companies.edit', [
            'company' => $company,
            'categories' => CompanyCategory::all()
        ]);
    }

    /**
     * Update the specified company in storage.
     *
     * @param CompanyUpdateRequest $request
     * @param Company $company
     * @return RedirectResponse
     */
    public function update(CompanyUpdateRequest $request, Company $company)
    {
        $data = $request->validated();
        $company->update($data);
        $company->category()->associate($data['category_id']);

        if ($request->hasFile('logo') && $request->file('logo')->isValid())
            $company->logo = $request->file('logo')->store('logos', 'public');
        if ($request->hasFile('video') && $request->file('video')->isValid())
            $company->video = $request->file('video')->store('videos', 'public');
        $company->state = 'pending_edit';
        $company->save();

        return redirect()
            ->route('dashboard.companies.show', ['company' => $company])
            ->with('success', __('شرکت شما با موفقیت ویرایش شد!'));
    }
}
