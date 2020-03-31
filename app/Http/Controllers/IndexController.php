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

class IndexController extends Controller
{

    public function GetDirectory()
    {
        $companies = company::orderBy('created_at', 'desc')->get();
        return view('directory')
            ->with(['companies' => $companies])
        ;
    }
    public function GetCompanies()
    {
        $companies = company::orderBy('created_at', 'desc')->paginate(12);
        return view('companies')
            ->with(['companies' => $companies])
        ;
    }
    public function GetProducts()
    {
        $products = product::orderBy('created_at', 'desc')->paginate(12);
        return view('products')
            ->with(['products' => $products])
        ;
    }

}    