<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class IndexController extends Controller
{

    public function GetCompanies()
    {
        $company = company::orderBy('created_at', 'desc')->get();
        return view('companies')
            ->with(['company' => $company])
        ;
    }


}    