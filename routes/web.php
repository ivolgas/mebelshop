<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', Controllers\AboutUsController::class)->name('aboutUs');

Route::get('/cart', Controllers\CartController::class)->name('cart');

Route::get('/catalog', Controllers\CatalogController::class)->name('catalog');

Route::get('/contacts', Controllers\ContactsController::class)->name('contacts');

Route::get('/delivery', Controllers\DeliveryController::class)->name('delivery');

Route::get('/product_card', Controllers\ProductCardController::class)->name('productCard');

Route::get('/products', Controllers\ProductsController::class)->name('products');

// Route::get('/', [Controllers\SubscriberController::class, 'SubscribeIndex']);
Route::post('dataInsert', [Controllers\SubscriberController::class, 'DataInsert']);
