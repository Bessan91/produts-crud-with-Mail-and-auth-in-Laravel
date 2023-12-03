<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});
Route::get('/home', function () {
    // return view('products.index');
    return redirect()->route('products.index');
});


Auth::routes();
Route::resource('products','App\Http\Controllers\ProductController');


Route::get('/sendemail',[EmailController::class, 'index']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\ProductController::class])->name('home');