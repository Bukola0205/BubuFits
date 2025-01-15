<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('home');
})-> name('home');

Route::get('/blog', function () {
    return view('blog');
}) -> name('blog');
Route::get('/shop', function () {
    return view('shop');
}) -> name('shop');

Route::get('/signup',[RegisteredUserController::class, "create"]) -> name("signup");
Route::post('/signup',[RegisteredUserController::class,"store"]);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get("/signin",[AuthenticatedSessionController::class,"create"]) -> name("login");
Route::post("/signin",[AuthenticatedSessionController::class,"store"]);

// Route::get('/', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
