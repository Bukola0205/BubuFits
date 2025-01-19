<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('home');
})-> name('home');

Route::get('/blog', function () {
    return view('blog');
}) -> name('blog');

Route::get('/shop',[ShopController::class,"index"]) -> name('shop');
Route::get("/cart",function() {
    return view('cart');
}) -> name('cart');

Route::get('/signup',[RegisteredUserController::class, "create"]) -> name("signup");
Route::post('/signup',[RegisteredUserController::class,"store"]);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get("/signin",[AuthenticatedSessionController::class,"create"]) -> name("login");
Route::post("/signin",[AuthenticatedSessionController::class,"store"]);


Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'getCart'])->name('cart');
Route::get('/cart/count', [CartController::class, 'cartCount'])->name('cart.count');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/payment',function(){
    return view('payment');
}) -> name('payment');
// Route::get('/', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
