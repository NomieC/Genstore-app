<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;

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


//Punya Fidel
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/photogalery', function () {
    return view('photogalery', [
        "title" => "Photo Galery"
    ]);
});


// Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');


// Define a named route for the form method
// Route::get('/form', [YourController::class, 'form'])->name('form');

// Define a named route for the delete method
// Route::get('/delete', [YourController::class, 'delete'])->name('delete');

// Route::get('/login',[CustomAuthController::class,'login']);
// Route::get('/registration',[CustomAuthController::class,'registration']);