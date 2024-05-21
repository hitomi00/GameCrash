<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameMediaController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('public.home');
})->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'show'])->name('admin.dashboard');
    Route::get('admin/users/view', [UsersController::class, 'show'])->name('admin.tables.users');
    Route::get('admin/carousel/edit', [CarouselController::class, 'show'])->name('admin.carousel.edit');
    Route::get('admin/games/view', [GamesController::class, 'show'])->name('admin.tables.games');
    Route::get('admin/games/add', [GamesController::class, 'showAdd'])->name('admin.tables.games.add');
    Route::post('admin/games/{game}/media', [GameMediaController::class, 'store'])->name('media.store');
    Route::post('admin/media/{media}/order', [GameMediaController::class, 'updateOrder'])->name('media.updateOrder');
});

require __DIR__ . '/auth.php';
