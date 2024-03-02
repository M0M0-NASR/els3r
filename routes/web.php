<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplinceController;
use Illuminate\Support\Facades\Route;
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

// Redirect to product/index
Route::redirect("/", "/product");

// Login and Register Routes
Auth::routes();

// Product Routes
Route::group(
    [],
    function () {
        Route::resource('/product', ProductController::class);
    }
);


// Complince Routes

Route::group(
    [],
    function () {
        Route::resource('/complince', ComplinceController::class);
    }
);


Route::group(
    [],
    function () {
        Route::resource('/category', CategoryController::class);
    }
);



