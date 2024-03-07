<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplinceController;
use App\Http\Controllers\HomeController;
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
        Route::get('/complince/searchWithNumber' , [ComplinceController::class , 'search'])
        ->name('complince.search');
        Route::get('/complince/print' , [ComplinceController::class , 'print'])
        ->name('complince.print');
        Route::resource('/complince', ComplinceController::class);
    }
);

Route::group(
    [],
    function () {
        Route::resource('/category', CategoryController::class);
    }
);

Route::get('/about' , [HomeController::class , 'about'])->name('site.about');
Route::get('/site/search' , [HomeController::class , 'search'])->name('site.search');
