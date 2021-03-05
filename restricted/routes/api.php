<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware(['log.route'])->group(function () {
    Route::get("/chart-informasi-warga", ['App\Http\Controllers\Web\ChartController', 'chartInformasiWarga'])->name('api.chart.index');
    Route::post("/log", ['App\Http\Controllers\Api\LogController', 'store'])->name('api.log.store');
    Route::get("/log", ['App\Http\Controllers\Api\LogController', 'index'])->name('api.log.index');
});
