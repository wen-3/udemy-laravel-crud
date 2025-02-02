<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('customers/trash', [CustomerController::class, 'trashIndex'])->name('customers.trash');
Route::get('customers/restore/{customer}', [CustomerController::class, 'restore'])->name('customers.restore');
Route::delete('customers/trash/{customer}', [CustomerController::class, 'forceDestroy'])->name('customers.force.destroy');

Route::resource('customers', CustomerController::class);
