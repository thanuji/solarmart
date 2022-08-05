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

Route::get('/', function () {
    return view('home');
});
Route::get('/shopsingle', function () {
    return view('shopsingle');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\ContactController::class,'contact'])->name('contact.create');

Route::post('/contact-form', [App\Http\Controllers\ContactController::class,'store'])->name('contact.store');