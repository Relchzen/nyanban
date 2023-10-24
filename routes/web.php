<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [MenuController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::post('/auth/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/signup', function () {
    return view('register');
});

Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'admin'])->name('admin');

Route::get('/admin/menu', [AdminController::class, 'menu'])->middleware(['auth', 'admin'])->name('admin.menu');
Route::get('menu/{id}', [MenuController::class, 'show'])->name('menu.show');
Route::get('/admin/menu/create', [MenuController::class, 'create'])->middleware(['auth', 'admin'])->name('menu.create');
Route::put('/admin/menu/create', [MenuController::class, 'store'])->middleware(['auth', 'admin'])->name('menu.store');


Route::get('/admin/category', [AdminController::class, 'category'])->middleware(['auth', 'admin'])->name('admin.category');
Route::post('/category/create', [CategoryController::class, 'create'])->middleware(['auth', 'admin'])->name('category.create');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->middleware(['auth', 'admin'])->name('category.destroy');

Route::get('/admin/users', [AdminController::class, 'users'])->middleware(['auth', 'admin'])->name('admin.users');
