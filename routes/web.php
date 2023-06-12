<?php

use App\Http\Controllers\CategorybarController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ConcertController;
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
Route::prefix('/')->group(function() {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/history', [NavbarController::class,'history'])->name('history');
    Route::get('/purchase', [NavbarController::class,'purchase'])->name('purchases');
    Route::get('/notification', [NavbarController::class,'notification']);
    Route::get('/profile', [NavbarController::class,'profile']);
});
Route::get('/', [CategorybarController::class,'all'])->name('home');
Route::get('/', [ConcertController::class, 'showconcert'])->name('home');
// Route::get('/', [ConcertController::class, 'info']);
Route::prefix('/category')->group(function() {
    Route::get('/kpop', [CategorybarController::class,'kpop'])->name('kpop');
    Route::get('/festivalmusic', [CategorybarController::class,'festivalmusic'])->name('festMusic');
    Route::get('/solo', [CategorybarController::class,'solo'])->name('solo');
    Route::get('/meetandgreet', [CategorybarController::class,'meet'])->name('meet');
    Route::get('/pop', [CategorybarController::class,'pop'])->name('pop');
});
Route::get('/bookedpage',function(){
    return view('bookedpage');
});
Route::get('/bookdetail',function(){
    return view('bookdetail');
});
Route::get('/bookedpage/{id?}', [ConcertController::class, 'show'])
        ->name('bookedpage.show');