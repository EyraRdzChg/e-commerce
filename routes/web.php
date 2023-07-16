<?php

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

// Rutas del menu
Route::get('/', function () {
    return view('menu.index');
})->name('index');

Route::get('contactanos', function () {
    return view('menu.contactanos');
})->name('contactanos');

Route::get('conocenos', function () {
    return view('menu.conocenos');
})->name('conocenos');

Route::get('Products', function () {
    return view('menu.Products-view');
})->name('Products');

Route::get('Dashboard', function () {
    return view('Dashboard.dashboard-index');
})->name('dashboard');
