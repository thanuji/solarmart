<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\WebController::class, 'index'])->name('home');

Route::get('/shopsingle', function () {
    return view('shopsingle');
});

Route::get('/dashboard', [App\Http\Controllers\ShopController::class,'index']);

Route::get('/homefirst', function () {
    return view('homefirst');
});

Route::get('/example', function () {
    return view('example');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/contact', [App\Http\Controllers\ContactController::class,'contact'])->name('contact.create');

Route::post('/contact-form', [App\Http\Controllers\ContactController::class,'store'])->name('contact.store');

//Admin
Route::get('/list_sellers', [App\Http\Controllers\UserController::class,'listSellers']);
Route::get('/list_buyers', [App\Http\Controllers\UserController::class,'listBuyers']);
Route::get('/delete_user/{id}', [App\Http\Controllers\UserController::class,'delete']);


//Seller
Route::get('/shop', [App\Http\Controllers\ShopController::class,'index']);
Route::post('/shop', [App\Http\Controllers\ShopController::class,'create']);

Route::get('/list_items', [App\Http\Controllers\ItemController::class,'index']);
Route::get('/add_item', [App\Http\Controllers\ItemController::class,'addItemIndex']);
Route::post('/add_item', [App\Http\Controllers\ItemController::class,'create']);
Route::get('/delete_item/{id}', [App\Http\Controllers\ItemController::class,'delete']);
Route::get('/item/{id}', [App\Http\Controllers\WebController::class,'single']);

//Buyer
Route::get('/search', [App\Http\Controllers\WebController::class, 'search'])->name('search');