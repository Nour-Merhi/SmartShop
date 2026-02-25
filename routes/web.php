<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
//use App\Http\Controllers\AuthController;

//Home page Route
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Authentication Route
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

//Shop page Route
Route::get('/shop', [ShopController::class, 'show'])->name('shop');

//Wishlist page route
Route::get('/wishList', [WishListController::class, 'index'])->name('wishList');


//cart page route
Route::post('/cart', [CartController::class, 'index'])->name('cart');

Route::middleware(['auth', 'role:Customer'])->prefix('customer')->group(function(){
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
});

//Contact page route
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'messageSubmit'])->name('contact.message');

//Admin Dashboard route
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/dashboard', [AdminController::class, 'productFormSubmit'])->name('admin.form.submit');
    Route::post('/dashboard',[AdminController::class, 'createDeliveryAccount'])->name('admin.create.delivery.account');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
