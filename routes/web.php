<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin', [MenuController::class, 'index'])->name('admin');
Route::get('/menus/{id}', [MenuController::class, 'show']);
Route::get('/menus/create', [MenuController::class, 'create']);
Route::post('/menus', [MenuController::class, 'store']);

Route::post('/admin/add', [MenuController::class, 'add']);
Route::post('/admin/create', [MenuController::class, 'create']);
Route::get('/admin/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/admin/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/admin/delete/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');



