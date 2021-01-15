<?php

namespace App\Http\Controllers;

use App\Company;
use App\product;
use App\CompanyCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CompanyController extends Controller
{

    public function GetCompanies()
    {
        $companies = company::orderBy('created_at', 'desc')->paginate(12);
        return view('companies.index')
            ->with(['companies' => $companies])
        ;
    }

    public function GetCompaniesSingle($id,$name)
    {
        $companies = company::find($id);
        return view('companies.single')
            ->with(['companies' => $companies])
        ;
    }

}