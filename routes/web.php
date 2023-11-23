<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/products', [ProductController::class,'index'])->middleware(['verify.shopify']);

Route::resource('faqs', FaqController::class);
Route::resource('group', GroupController::class);

// Route::prefix('faq')->name('faq.')->group(function () {
//     Route::resource('faqs', FaqController::class);
// });
