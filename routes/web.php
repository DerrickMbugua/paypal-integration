<?php

use App\Http\Controllers\PaypalController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paypal', [PaypalController::class, "index"])->name("paypal-index");
Route::get('/process-paypal', [PaypalController::class, "processPaypal"])->name("process-paypal");
Route::get('/process-success', [PaypalController::class, "processSuccess"])->name("process-success");
Route::get('/process-cancel', [PaypalController::class, "processCancel"])->name("process-cancel");
