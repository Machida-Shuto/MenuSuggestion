<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', [MenuController::class, 'index'])->name('index');
    Route::get('/menus/{menu}',  [MenuController::class, 'show']);
    Route::post('/reviews',  [MenuController::class, 'store']);
    Route::get('/menus/{menu}/review',  [MenuController::class, 'create']);
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");
Route::get('/', [MenuController::class, 'index'])->name('index');
Route::post('/like/{menu}',  [LikeController::class, 'store']);
Route::post('/unlike/{menu}',  [LikeController::class, 'destroy']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
