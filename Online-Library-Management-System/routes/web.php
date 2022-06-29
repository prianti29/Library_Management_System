<?php

use App\Http\Controllers\Admin\DashboardController;
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
 Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Route::prefix('/admin')->middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index']);
    // Route::get('/booklisted', [DashboardController::class, 'index']);
    // Route::get('/notreturned', [DashboardController::class, 'index']);
    // Route::get('/registerduser', [DashboardController::class, 'index']);
    // Route::get('/authoruser', [DashboardController::class, 'index']);
    // Route::get('/categories', [DashboardController::class, 'index']);
// });

require __DIR__ . '/auth.php';
