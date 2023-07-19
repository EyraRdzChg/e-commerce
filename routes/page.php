<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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



//Users routes

Route::resource('dashboard/user', UserController::class);

// Route::get('dashboard/users', function () {
//     return view('Dashboard.dashboard-users');
// })->name('users');

// Route::get('dashboard/users/create', function () {
//     return view('Dashboard.users.users-create');
// })->name('users-create');

// Route::get('dashboard/users/show', function () {
//     return view('Dashboard.users.user-show');
// })->name('users-show');

// Route::get('dashboard/users/update', function () {
//     return view('Dashboard.users.user-update');
// })->name('users-update');

//Categories routes
Route::get('dashboard/cateogries', function () {
    return view('Dashboard.category.category');
})->name('category');

Route::get('dashboard/cateogries/create', function () {
    return view('Dashboard.category.category-create');
})->name('category-create');

Route::get('dashboard/cateogries/show', function () {
    return view('Dashboard.category.category-show');
})->name('category-show');

Route::get('dashboard/cateogries/update', function () {
    return view('Dashboard.category.category-update');
})->name('category-update');
