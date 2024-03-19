<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\WelcomePageController::class,"index"]);
Route::get('/about', function () {
    return view("about");
});
Route::get('/shop', [ App\Http\Controllers\ShopController::class, "index"]);
Route::get('/contact',[App\Http\Controllers\ContactController::class, "index"]);
Route::get('/admin/all-contact', [App\Http\Controllers\ContactController::class, "allContact"]);
Route::post("/post-contact",[ContactController::class,"postContact"]);
Route::get("/admin/add-products",[AdminController::class,"index"]);
Route::post("/admin/add-all",[AdminController::class,"postProducts"]);
Route::get("/admin/products",[AdminController::class,"getProducts"]);