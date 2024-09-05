<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Models\Kategori;
use App\Models\Pesan;
use App\Models\Produk;
use App\Models\User;
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

Route::get('/',[UserController::class,'login']);
Route::post('/auth',[UserController::class, 'authentikasi']);
Route::middleware('status_login')->group(function(){
    // Route::get('/home',[UserController::class, 'home']);
    Route::get('/register',[UserController::class,'register']);
    Route::get('/home',[UserController::class, 'adm']);
    Route::get('/produk',[UserController::class, 'produk']);
    Route::get('/checkout',[UserController::class, 'checkout']);




    Route::get('/user',[UserController::class, 'show']);
    Route::post('/user/search',[UserController::class, 'search']);
    Route::get('/user/create',[UserController::class, 'create']);
    Route::post('/user/create',[UserController::class, 'add']);
    Route::post('/user/edit/{id}',[UserController::class, 'update']);
    Route::get('/user/edit/{id}',[UserController::class, 'edit']);
    Route::get('/user/delete/{id}',[UserController::class, 'delete']);


    Route::get('/dasboard',[ProdukController::class, 'show']);
    Route::get('/dasboard/create',[ProdukController::class, 'create']);
    Route::post('/dasboard/create',[ProdukController::class, 'add']);
    Route::get('/dasboard/delete/{id}',[ProdukController::class, 'delete']);
    Route::post('/dasboard/search',[ProdukController::class, 'search']);
    Route::post('/dasboard/update/{id}',[ProdukController::class, 'update']);
    Route::get('/dasboard/edit/{id}',[ProdukController::class, 'edit']);
    Route::get('/logout',[UserController::class,'logout']);

    Route::get('/kategori',[KategoriController::class, 'tampil']);
    Route::get('/kategori/create',[KategoriController::class, 'create']);
    Route::post('/kategori/create',[KategoriController::class, 'add']);
    Route::get('/kategori/delete/{id}',[KategoriController::class, 'delete']);

    Route::get('/detailproduk/{id}',[UserController::class, 'detailproduk']);
    Route::get('/keranjang',[KeranjangController::class, 'keranjang']);
    Route::post('/keranjang/add/{id}',[KeranjangController::class, 'addkeranjang']);
    Route::get('/checkout',[UserController::class,'checkout']);




    Route::post('cart/keranjang',[KeranjangController::class, 'addchart'])->name('cart.add');
    Route::get('/delete-cart/{id}', [KeranjangController::class, 'delete']);


});


