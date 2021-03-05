<?php

use Illuminate\Support\Facades\Route;
$namespace = "App\Http\Controllers\Web";
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
Route::get('/', "$namespace\IndexController@index")->name('index');
Route::get('/detail-article/{slug}', "$namespace\IndexController@detail")->name('detail-article');

Route::get('/masuk', function () {
    return view('login.login');
})->name('login-form');

Route::middleware(['auth:sanctum', 'verified'])->group(function () use ($namespace) {
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');
    Route::resource("/master", "$namespace\MasterController");
    Route::get("/log", "$namespace\LogController@index")->name("log.index");
});

// Route::get("/request-new-token", ["$namespace\UserController", 'formRequestNewToken'])->name('confirm.form-request-new-token');
// Route::post("/request-new-token", ["$namespace\UserController", 'requestNewToken'])->name('confirm.request-new-token');
// Route::get("/v1/confirm-account", ["$namespace\UserController", 'confirmAccount'])->name('confirm.confirm-account');
