<?php

use App\Http\Controllers\SuperAdmin\InvoiceController;
use App\Http\Controllers\SuperAdmin\UserController;
use App\Http\Controllers\User\IndoTransaksiController;
use App\Http\Controllers\User\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('dashboard.content');
})->name('dashboard.index');

Route::get('/login', function () {
    return view('auth.login');
});

// force logout routes, temporary for debugging
Route::get('/force/logout', function (Request $request) {
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
});

// Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:User']], function () {

    // Transaction & Invoice Routes
    Route::controller(TransaksiController::class)->group(function(){
        Route::get('/{id}/transaction', 'show')->name('product.show');
        Route::post('/store/transaction', 'store')->name('transaction.store');
        Route::get('/invoice', 'invoice')->name('transaction.invoice');
        Route::get('/{id}/invoice', 'detailinvoice')->name('transaction.detailinvoice');
        Route::put('/{id}/invoice', 'update')->name('transaction.updateinvoice');
    });

    // Transaksi indo
    // Route::controller(IndoTransaksiController::class)->group(function() {
    //     Route::post('/store/transaction', 'store')->name('transaction.store');
    // });
});


Auth::routes();
