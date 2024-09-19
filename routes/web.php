<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController; // Add this line
use App\Http\Controllers\Row1controller\DataMatchListController; // Add this line
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //login page
});


Route::get('/test', function () {
    return view('test');
});

route::get('/dashboard', [DashboardController::class, 'showCards'])->middleware(['auth', 'verified'])->name('dashboard');
route::get('/DataMatchList', [DataMatchListController::class, 'showDataMatchList'])->middleware(['auth', 'verified'])->name('DataMatchList');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Route::get('/dashboard', [DashboardController::class, 'showCards']);










require __DIR__.'/auth.php';
