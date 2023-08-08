<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', function () {return view('dashboard.dashboard');});

Route::controller(InvoiceController::class)->group(function () {
    Route::get('/invoice', 'index')->name('invoice.dashboard');
});

Route::controller(SupplierController::class)->group(function () {
    Route::get('/supplier', 'index')->name('supplier.dashboard');
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/settings/employee', 'index')->name('settings.employee');
    Route::post('/settings/employee/store', 'store')->name('employee.store');
});