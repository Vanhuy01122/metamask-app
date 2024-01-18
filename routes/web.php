<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::post('/authenticate', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::get('/send-transaction', function () {
//    return view('send-transaction');
//});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/api/send-transaction', [HomeController::class, 'sendTransaction']);
});

// Route cho trang đăng nhập
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/transaction', [\App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('transaction');
});
