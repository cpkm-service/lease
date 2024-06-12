<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['backend'])
    ->prefix('backend')
    ->name('backend.')
    ->namespace('Cpkm\Lease\Http\Controllers\Backend')->group(function(){
        Route::middleware(['auth:backend', 'admin.permission'])
            ->prefix('lease')
            ->name('lease.')
            ->group(function () {
                /* 報價單 */
                Route::resource('quote_order', 'Lease\QuoteOrderController');
                /* 合約單 */
                Route::resource('contract_order', 'Lease\ContractOrderController');
                /* 回廠單 */
                Route::resource('return_factory_order', 'Lease\ReturnFactoryOrderController');
                /* 檢修單 */
                Route::resource('overhaul_order', 'Lease\OverhaulOrderController');
            });
    });
