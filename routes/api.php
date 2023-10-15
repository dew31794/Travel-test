<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    // 匯率
    Route::group(['namespace' => 'API', 'prefix' => 'currency'], function () {
        // 取得匯率列表
        Route::get('/', 'CurrencyController@index')->name('api.currency.index');;
        // 轉換
        Route::get('exchange', 'CurrencyController@exchange')->name('api.currency.exchange');
    });
});