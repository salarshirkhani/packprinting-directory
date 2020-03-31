<?php


//------------------------------------------------------------INDEX ROUTES
use App\Company;

Route::get('/', function () {
    return view('directory')->with([
        'companies' => Company::where('state', 'accepted')->orderBy('created_at', 'desc')->get()
    ]);
});

Route::get('companies', [ 'uses' => 'IndexController@GetCompanies', 'as' => '/']);

//---------------------------------------------------------------------

Auth::routes();

Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware('auth')
    ->namespace('Dashboard')
    ->group(function() {
        Route::get('', 'IndexController@get')->name('index');

        Route::resource('companies', 'CompanyController')->only([
            'create', 'store', 'edit', 'update', 'show'
        ]);

        Route::resource('products', 'ProductController')
            ->middleware('company_ownership')
            ->only([
                'create', 'store', 'edit', 'update', 'show'
            ]);
    });
