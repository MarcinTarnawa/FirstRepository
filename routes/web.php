<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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




Route::get('/products',[ProductController::class,'index'])->name('products.index')->middleware('auth','verified');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create')->middleware('auth');
Route::get('/products{product}',[ProductController::class,'show'])->name('products.show')->middleware('auth');
Route::post('/products',[ProductController::class,'store'])->name('products.store')->middleware('auth');
Route::get('/products/edit{product}',[ProductController::class,'edit'])->name('products.edit')->middleware('auth');
Route::post('/products/{product}',[ProductController::class,'update'])->name('products.update')->middleware('auth');

Route::delete('/products{product}',[ProductController::class,'destroy'])->middleware('auth');

Route::delete('/users/list{id}',[UserController::class,'destroy'])->middleware('auth');

Route::get('/users/list',[UserController::class,'index'])->name('users.list')->middleware('auth'); //routing przez kontroler ->middleware('auth');

Route::get('/',[WelcomeController::class,'index'])->name('/');

Route::get('/dashboard',[WelcomeController::class,'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');