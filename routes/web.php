<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CsController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\WebmenuController;
use App\Http\Controllers\LogoutController;

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


Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::redirect('/', '/login');

    // Master Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Master Kategori
    Route::resource('kategori', KategoriController::class)->names([
        'index'   => 'kategori'
    ]);

    // Master Tags
    Route::resource('tag', TagController::class)->names([
        'index' => 'tag'
    ]);

    // Master Diskon
    Route::resource('diskon', DiskonController::class)->names([
        'index' => 'diskon'
    ]);

    // Master Product
    Route::resource('product', ProductController::class)->names([
        'index' => 'product'
    ]);

    Route::get('/product-add', [ProductController::class,'getDb']);

    // Master Customer Services
    Route::resource('cs', CsController::class)->names([
        'index' => 'cs'
    ]);

    Route::get('/cs-add',function(){
        return view('master.cs_add');
    });

    // Master Konsumen
    Route::resource('konsumen', KonsumenController::class)->names([
        'index' => 'konsumen'
    ]);

    // Master Settings Web Menu
    Route::resource('webmenu', WebmenuController::class)->names([
        'index' => 'webmenu'
    ]);

});
