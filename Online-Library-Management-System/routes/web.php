<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IssuedBookController;
use App\Http\Middleware\onlyAdmin;
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
    return view('site.home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
// Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::prefix('/admin')->middleware(['auth',onlyAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/categories', CategoryController::class);

    Route::resource('/author', AuthorController::class);
    Route::resource('/books', BookController::class);
    Route::resource('/issuebooks', IssuedBookController::class);
});

require __DIR__ . '/auth.php';
