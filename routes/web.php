<?php

use App\Http\Controllers\CategorybarController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SearchController;
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

// test
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/post-signup', [AuthController::class, 'postSignup'])->name('signup.post');
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//

Route::prefix('/')->group(function() {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/history', [NavbarController::class,'history'])->name('history');
    Route::get('/purchase', [NavbarController::class,'purchase'])->name('purchases');
    Route::get('/notification', [NavbarController::class,'notification']);
    Route::get('/profile', [NavbarController::class,'profile']);
});
Route::get('/home', [CategorybarController::class,'all'])->name('home');
Route::get('/home', [ConcertController::class, 'showconcert'])->name('home');
// Route::get('/', [ConcertController::class, 'info']);
Route::prefix('/category')->group(function() {
    Route::get('/kpop', [CategorybarController::class,'kpop'])->name('kpop');
    Route::get('/festivalmusic', [CategorybarController::class,'festivalmusic'])->name('festMusic');
    Route::get('/solo', [CategorybarController::class,'solo'])->name('solo');
    Route::get('/meetandgreet', [CategorybarController::class,'meet'])->name('meet');
    Route::get('/pop', [CategorybarController::class,'pop'])->name('pop');
});

Route::get('/bookedpage/{id?}', [ConcertController::class, 'show'])
        ->name('bookedpage');
Route::get('/bookdetail/{id?}', [ConcertController::class, 'showdetail'])
    ->name('bookdetail.showdetail');
Route::get('/payment',function(){
    return view('payment');
});
Route::get('/payment/{id?}/{cat?}',[TransactionController::class, 'showcat'])->name('payment.showcat');

Route::get('add-form', [TransactionController::class, 'create']);
Route::post('store-form', [TransactionController::class, 'store']);
// Route::get('/search', SearchController::class)->name('search');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/ticket', [ConcertController::class,'ticketshow'])->name('ticket');


Route::get('/tix', function () {
    return view('tix');
})->name('tix');
