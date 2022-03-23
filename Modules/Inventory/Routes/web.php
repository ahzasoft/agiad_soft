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



Route::middleware(['web',  'SetSessionData', 'auth', 'language', 'timezone', 'AdminSidebarMenu'])
    ->prefix('inventory')->group(function() {
        Route::get('/install', 'InstallController@index');
        Route::post('/install', 'InstallController@install');
        Route::get('/install/uninstall', 'InstallController@uninstall');
        Route::get('/install/update', 'InstallController@update');


        Route::resource('/inventory', 'InventoryController');
        Route::resource('/stock', 'StocktackingController');
        Route::get('/stock/transaction/{id}', 'StocktackingController@transaction');
        Route::get('/stock/report', 'StocktackingController@report');
        Route::get('/stock/report_plus', 'StocktackingController@report_plus');
        Route::get('/stock/report_minus', 'StocktackingController@report_minus');
        Route::get('/stock/changestatus/{id}/{status}', 'StocktackingController@changestatus');

    });
