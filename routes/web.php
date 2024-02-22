<?php

use App\Http\Controllers\CurrencyController;
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

Route::get('/', static function () {
    return redirect('/currency');
});

Route::prefix('currency')->name('currency.')->controller(CurrencyController::class)->group(function () {
    Route::patch('/{id}', 'update')->name('update');
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});
