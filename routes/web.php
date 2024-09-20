<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartShopController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SettingController;

Route::get('/', [HomeController::class, 'home'])->name('shop.index');
Route::get('/about', [PageController::class, 'about'])->name('about.index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact.index');

Route::get('/contact/inquiry/{id_product}', [ContactController::class, 'contact_inquiry'])->name('contact.product.ask');
Route::get('/product/{name_product}', [ProductController::class, 'product'])->name('product.detail');
Route::get('/search/product/{name_product}', [SearchController::class, 'search'])->name('search.product.detail');

Route::get('/shoping/cart/{id_cart}', [CartShopController::class, 'cart'])->name('shoping.cart.detail');
Route::post('/shoping/checkout/confirm/{id_user}', [CheckOutController::class, 'check_out'])->name('shoping.checkout.detail');


// Route need midlawer for access 
Route::get('/shoping/profile/{id_user}', [ProfileController::class, 'profile'])->name('shoping.profile.index');
Route::get('/shoping/{id_user}/orders/{id_invoice}/progress', [OrderController::class, 'orders'])->name('shoping.orders.index');
Route::get('/shoping/settings/{id_user}', [SettingController::class, 'settings'])->name('shoping.settings.index');

Route::get('/admin/dashboard', function(){
    return 'You in dashboard';
})->name('admin.index');