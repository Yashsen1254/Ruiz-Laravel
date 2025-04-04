<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CartController as BackendCartController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CheckoutController as BackendCheckoutController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\IndexController as BackendIndexController;
use App\Http\Controllers\Backend\LoginController as BackendLoginController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RegisterController as BackendRegisterController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('front.index');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/store', [CartController::class, 'addToCart']);
Route::get('/cart/delete/{id}', [CartController::class, 'delete']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::post('/checkout/store', [CheckoutController::class, 'store']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('front.login');
Route::post('/login/store', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index'])->name('front.register');
Route::post('/register/store', [RegisterController::class, 'store']);
Route::get('/singleproduct/{id}', [ShopController::class, 'show']);
Route::get('/logout', [LoginController::class, 'logout']);

//backend routes

//index routes
Route::get('/admin', [BackendIndexController::class, 'index'])->name('index');

//login and register routes
Route::get('/admin/login', [BackendLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login/store', [BackendLoginController::class, 'login']);
Route::get('/admin/logout', [BackendLoginController::class, 'logout'])->name('admin.logout');
Route::get('/admin/register', [BackendRegisterController::class, 'index']);


//admin routes
Route::get('/admin/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/admin/{id}', [AdminController::class, 'update'])->name('admin.update'); 
Route::get('/admin/admin/{id}/delete', [AdminController::class, 'delete'])->name('admin.delete');

//category routes
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/admin/category/{id}', [CategoryController::class, 'update'])->name('category.update'); 
Route::get('/admin/category/{id}/delete', [CategoryController::class, 'delete'])->name('category.delete');

//products routes
Route::get('/admin/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/admin/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/product/{id}', [ProductController::class, 'update'])->name('product.update'); 
Route::get('/admin/product/{id}/delete', [ProductController::class, 'delete'])->name('product.delete');

//checkout routes
Route::get('/admin/checkout', [BackendCheckoutController::class, 'index'])->name('checkout.index');

//client routes
Route::get('/admin/client', [ClientController::class, 'index'])->name('client.index');

//cart routes
Route::get('/admin/cart', [BackendCartController::class, 'index'])->name('cart.index');

//order routes
Route::get('/admin/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/admin/order/{id}', [OrderController::class, 'update'])->name('order.update');

//payment routes
Route::get('/admin/payment', [PaymentController::class, 'index'])->name('payment.index');