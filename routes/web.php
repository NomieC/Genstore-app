<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YourController;
use App\Http\Controllers\Menu2Controller;
use App\Http\Controllers\CustomAuthController;

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
    return view('form');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

// Menu routes
Route::post('/createMenu', [Menu2Controller::class, 'createMenu']);


// Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');


// Define a named route for the form method
// Route::get('/form', [YourController::class, 'form'])->name('form');

// Define a named route for the delete method
// Route::get('/delete', [YourController::class, 'delete'])->name('delete');

// Route::get('/login',[CustomAuthController::class,'login']);
// Route::get('/registration',[CustomAuthController::class,'registration']);