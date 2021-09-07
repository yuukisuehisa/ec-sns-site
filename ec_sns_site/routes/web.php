<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\favoriteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RepurchaseController;


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

Route::get("/", [HomeController::class, "index"])->name("home.index");
Route::get("/signup", [SignupController::class, "index"])->name("sign.index");
Route::get("/login", [LoginController::class, "index"])->name("login.index");
Route::get("/member", [MemberController::class, "index"])->name("member.index");
Route::get("/merchandise", [MerchandiseController::class, "index"])->name("merchandise.index");
Route::get("/favorite", [FavoriteController::class, "index"])->name("favorite.index");
Route::get("/cart", [CartController::class, "index"])->name("cart.index");
Route::get("/category", [CategoryController::class, "index"])->name("category.index");
Route::get("/repurchase", [RepurchaseController::class, "index"])->name("repurchase.index");
Route::get("/news", [NewsController::class, "index"])->name("news.index");


