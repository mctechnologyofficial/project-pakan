<?php

use App\Http\Controllers\Admin\ReportController;
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
    Route::controller(IndoTransaksiController::class)->group(function() {
        Route::get('{id}/produk', 'show')->name('produk');
        Route::get('/{id}/invoice-indo', 'invoice')->name('invoice-indo');
        Route::post('/store/transaksi', 'store')->name('store');
    });
});


Route::group(['middleware' => ['role:Super Admin']], function() {
    Route::controller(UserController::class)->group(function() {
        Route::get('/user/list', 'index')->name('user-list');
        Route::get('/user/create', 'create')->name('user-create');
        Route::post('/user/store', 'store')->name('user-store');
        Route::delete('/user/destroy', 'destroy')->name('user-destroy');
    });

    Route::controller(InvoiceController::class)->group(function() {
        Route::get('/proofpayment/index', 'index')->name('superadmin.proofpayment.index');
    });
});

Route::group(['middleware' => ['role:Admin']], function() {
        Route::controller(ReportController::class)->group(function() {
            Route::get('/report/list', 'index')->name('report-list');
        });
});

Auth::routes();
