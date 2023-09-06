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

Route::get('/index', [Controllers\IndexAppController::class, 'index'])->name('index');

Route::get('/', [Controllers\AboutUsController::class, 'aboutUs'])->name('aboutUs');

Route::get('/cart', [Controllers\CartController::class, 'cart'])->name('cart');

Route::get('/catalog', [Controllers\CatalogController::class, 'catalog'])->name('catalog');

Route::get('/catalog/{category}', [Controllers\CatalogController::class, 'getOne'])->name('catalog_one');

Route::get('/contacts', [Controllers\ContactsController::class, 'contacts'])->name('contacts');

Route::get('/delivery', [Controllers\DeliveryController::class, 'delivery'])->name('delivery');

Route::get('/products', [Controllers\ProductsController::class, 'products'])->name('products');

// Route::get('/product_card', [Controllers\ProductCardController::class, 'productCard'])->name('productCard');

Route::get('/product/{id}', [Controllers\ProductCardController::class, 'productCard'])->name('productOne');

Route::get('/product_card/{id}', [Controllers\ProductCardController::class, 'addProductToCart'])->name('addproduct.to.cart');

// Route::get('/', [Controllers\SubscriberController::class, 'SubscribeIndex']);
Route::post('dataInsert', [Controllers\SubscriberController::class, 'DataInsert']);

Route::delete('/delete-cart-product', [Controllers\CartController::class, 'deleteProduct'])->name('delete.cart.product');
