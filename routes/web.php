<?php


//------------------------------------------------------------INDEX ROUTES

Route::get('/', [ 'uses' => 'IndexController@GetDirectory', 'as' => '/']);

Route::get('companies', [ 'uses' => 'IndexController@GetCompanies', 'as' => 'companies']);

Route::get('products', [ 'uses' => 'IndexController@GetProducts', 'as' => 'products']);



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
