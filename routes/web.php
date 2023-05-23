<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [InvoiceController::class, 'index']);
Route::post('pay_with_cc', [InvoiceController::class, 'payWithCreditCard'])->name('pay_with_cc');
Route::post('process_payment', [InvoiceController::class, 'processPayment'])->name('process_payment');

