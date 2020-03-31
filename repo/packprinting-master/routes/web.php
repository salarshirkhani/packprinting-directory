<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Company;

Route::get('/', function () {
    return view('index')->with([
        'companies' => Company::where('state', 'accepted')->orderBy('created_at', 'desc')->get()
    ]);
});

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
