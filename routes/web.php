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

Route::get('/catalog/{category_id}', [Controllers\ProductsController::class, 'getCategory'])->name('products');

Route::get('/contacts', [Controllers\ContactsController::class, 'contacts'])->name('contacts');

Route::get('/delivery', [Controllers\DeliveryController::class, 'delivery'])->name('delivery');

Route::get('/product/{id}', [Controllers\ProductCardController::class, 'productCard'])->name('productCard');

Route::get('/product_card/{id}', [Controllers\ProductCardController::class, 'addProductToCart'])->name('addproduct.to.cart');

Route::post('dataInsert', [Controllers\SubscriberController::class, 'DataInsert']);

Route::delete('/delete-cart-product', [Controllers\CartController::class, 'deleteProduct'])->name('delete.cart.product');
