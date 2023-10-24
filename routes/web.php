<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Add the 'cart' route here


    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
});



Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/menus/{id}', [MenuController::class, 'show']);
Route::get('/menus/create', [MenuController::class, 'create']);
Route::post('/menus', [MenuController::class, 'store']);


Route::post('/admin/add', [MenuController::class, 'add']);
Route::post('/admin/create', [MenuController::class, 'create']);
Route::get('/admin/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/admin/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/admin/delete/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');


Route::post('/cart/add/{id}', [CartController::class, 'addItem'])->name('cart.add');
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');



// Route::post('/cart/add/{id}', 'CartController@addToCart')->name('cart.add');
Route::post('/cart/clear', 'CartController@clearCart')->name('cart.clear');
Route::post('/cart/remove/{id}', 'CartController@removeFromCart')->name('cart.remove');



require __DIR__.'/auth.php';
