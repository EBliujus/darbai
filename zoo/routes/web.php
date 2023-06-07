<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecieController as SC;
use App\Http\Controllers\ManagerController as MC;
use App\Http\Controllers\AnimalController as AC;

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


Route::prefix('species')->name('species-')->group(function () {
    Route::get('/', [SC::class, 'index'])->name('index');
    Route::get('/create', [SC::class, 'create'])->name('create');
    Route::post('/create', [SC::class, 'store'])->name('store');
    Route::get('/edit/{specie}', [SC::class, 'edit'])->name('edit');
    Route::put('/edit/{specie}', [SC::class, 'update'])->name('update');
    Route::delete('/delete/{specie}', [SC::class, 'destroy'])->name('delete');
});

Route::prefix('managers')->name('managers-')->group(function () {
    Route::get('/', [MC::class, 'index'])->name('index');
    Route::get('/create', [MC::class, 'create'])->name('create');
    Route::post('/create', [MC::class, 'store'])->name('store');
    Route::get('/edit/{manager}', [MC::class, 'edit'])->name('edit');
    Route::put('/edit/{manager}', [MC::class, 'update'])->name('update');
    Route::delete('/delete/{manager}', [MC::class, 'destroy'])->name('delete');
});