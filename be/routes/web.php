<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController as RC;
use App\Http\Controllers\MenuController as MC;
use App\Http\Controllers\DishController as DC;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('restaurants')->name('restaurants-')->group(function () {
    Route::get('/', [RC::class, 'index'])->name('index');
    Route::get('/create', [RC::class, 'create'])->name('create');
    Route::post('/create', [RC::class, 'store'])->name('store');
    Route::get('/edit/{restaurant}', [RC::class, 'edit'])->name('edit');
    Route::put('/edit/{restaurant}', [RC::class, 'update'])->name('update');
    Route::delete('/delete/{restaurant}', [RC::class, 'destroy'])->name('delete');
});

Route::prefix('menius')->name('menius-')->group(function () {
    Route::get('/', [MC::class, 'index'])->name('index');
    Route::get('/create', [MC::class, 'create'])->name('create');
    Route::post('/create', [MC::class, 'store'])->name('store');
    Route::get('/edit/{meniu}', [MC::class, 'edit'])->name('edit');
    Route::put('/edit/{meniu}', [MC::class, 'update'])->name('update');
    Route::delete('/delete/{meniu}', [MC::class, 'destroy'])->name('delete');
});

Route::prefix('dishes')->name('dishes-')->group(function () {
    Route::get('/', [DC::class, 'index'])->name('index');
    Route::get('/create', [DC::class, 'create'])->name('create');
    Route::post('/create', [DC::class, 'store'])->name('store');
    Route::get('/edit/{dish}', [DC::class, 'edit'])->name('edit');
    Route::put('/edit/{dish}', [DC::class, 'update'])->name('update');
    Route::delete('/delete/{dish}', [DC::class, 'destroy'])->name('delete');
});
