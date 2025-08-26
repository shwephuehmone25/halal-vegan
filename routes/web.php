<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\RestaurantController;
use App\Http\Controllers\admin\AdminDashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::post('restaurants', [RestaurantController::class, 'store']);
Route::get('restaurants/{restaurant}', [RestaurantController::class, 'show'])->name('restaurants.show');
Route::post('restaurants/{restaurant}', [RestaurantController::class, 'update']);
Route::delete('restaurants/{restaurant}', [RestaurantController::class, 'destroy']);

//Route::get('/dashboard', [AdminDashboardController::class, 'showDataInAdminDashboard'])->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
