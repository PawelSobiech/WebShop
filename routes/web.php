<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//index
Route::get('/index', [NewsletterController::class, 'index'])->name('indexIndex');
Route::post('/index', [NewsletterController::class, 'store'])->name('indexStore');
//contact
Route::get('/contact', [ContactController::class, 'index'])->name('contactIndex');
Route::post('/contact', [ContactController::class, 'store'])->name('contactStore');
//shop
Route::get('/shop', [ShopController::class, 'index'])->name('shopIndex');
Route::get('/shop1', [ShopController::class, 'index1'])->name('shopIndex');
Route::get('/shop2', [ShopController::class, 'index2'])->name('shopIndex');
Route::get('/shop3', [ShopController::class, 'index3'])->name('shopIndex');
Route::get('/shop4', [ShopController::class, 'index4'])->name('shopIndex');
Route::get('/shop{id}', [ShopController::class, 'index'])->name('shopShow');
Route::post('/shop{id}', [ShopController::class, 'store'])->name('shopStore');
//cart
Route::get('/cart', [CartController::class, 'index'])->name('cartIndex');
Route::post('/cart{id}', [CartController::class, 'edit'])->name('cartEdit');
//checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkoutIndex');
Route::post('/checkout{wartosc}', [CheckoutController::class, 'store'])->name('checkoutStore');
//about
Route::get('/about', [AboutController::class, 'index'])->name('aboutIndex');