<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/input', function () {
    return view('input');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::post('/register', [UserController::class, 'register'])->name('register');
// Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

// Menu routes
Route::get('/index', 'MenuController@index');


Route::get('/menus', [MenuController::class, 'index']);
Route::get('/', [MenuController::class, 'index']);
// Route::post('/delete', [MenuController::class, 'delete']);
// Route::post('/form', [MenuController::class, 'form']);

Route::get('/edit/{nama}', [MenuController::class, 'editForm']);
Route::post('/delete', [MenuController::class, 'delete']);
Route::post('/add', [MenuController::class, 'editForm']);

Route::patch('/updateMenu/{nama}', [MenuController::class, 'updateMenu']);
Route::post('/addForm', [MenuController::class, 'addForm']);

Route::patch('/create-Menu', [MenuController::class, 'createMenu']);

// routes/web.php

// Route::get('/login', [CustomAuthController::class, 'login']);


//Punya Fidel
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';