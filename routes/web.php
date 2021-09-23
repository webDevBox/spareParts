<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CategoryController;

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
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/',[AuthController::class, 'index'])->name('adminLogin');
    Route::post('/login',[AuthController::class, 'login'])->name('adminSignin');
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard',[HomeController::class, 'index'])->name('adminDashboard');
        Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
        Route::prefix('category')->group(function () {
            Route::get('/',[CategoryController::class, 'index'])->name('categories');
            
        });
    });
});
