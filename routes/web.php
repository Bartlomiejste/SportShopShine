<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WelcomeController::class, 'index']);


// Route::resource('users', UserController::class)->only([
//             'index','edit','update','destroy'
//         ]); ---> ????

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Tutaj trasy dostępne tylko dla admina
});

// Index route
Route::get('users', [UserController::class, 'index'])->name('users.index');

// Edit route
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Update route
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');

// Destroy route
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// Route::resource('products', ProductController::class);
Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Auth::routes(['verify' => true]);

// Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('language/{lang}', [LangController::class, 'switchLang'])->name('language.switch');