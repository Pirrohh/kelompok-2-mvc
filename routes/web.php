<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentLogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
})->middleware('auth');

Route::middleware('onlyguest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('onlyadmin');
    Route::get('profile', [UsersController::class, 'profile'])->middleware('onlyclient');
    Route::get('books', [BookController::class, 'index']);
    Route::resource('category',CategoriesController::class)->only([
        'index','store','edit','delete'
    ]);
    //Route::post('category-add', [CategoriesController::class, 'store']);
    Route::get('rentlog', [RentLogsController::class, 'index']);
    Route::get('user', [UsersController::class, 'index']);
});
