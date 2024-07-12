<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return Auth::check() ? redirect()->route('home') : redirect()->route('login');
});


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/warehouse', [WarehouseController::class, 'index'])->name('warehouse');
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

    // warehouse 
    Route::get('/warehouse/items', [WarehouseController::class, 'getItems']);
    Route::post('/warehouse_add', [WarehouseController::class, 'store'])->name('warehouse-add');
    Route::post('/warehouse_update', [WarehouseController::class, 'update'])->name('warehouse-update');
    Route::post('/update-warehouse-quantities', [WarehouseController::class, 'updateWarehouseQuantities'])->name('update-warehouse-quantities');

    // users 
    Route::get('/users', [UsersController::class, 'index'])->name('users');

    Route::post('/user_add', [UsersController::class, 'store'])->name('user-add');
    Route::post('/user_update', [UsersController::class, 'update'])->name('user-update');

    // cashier 
    Route::get('/cashier', [InventoryController::class, 'cashier'])->name('cashier');
    Route::get('/cashier-search', [InventoryController::class, 'searchAvailable'])->name('cashier-search');

    // payment 

    Route::post('/payment', [PaymentController::class, 'store'])->name('payment');
});
