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

class ProductController extends Controller
{

    public function GetProducts()
    {
        $products = product::orderBy('created_at', 'desc')->paginate(12);
        return view('products.index')
            ->with(['products' => $products])
        ;
    }



}