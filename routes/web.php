<?php

use App\Http\Controllers\AdminDashboardController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/', function () {
    return Inertia::render('index');
})->name('index');

Route::get('/about', function () {
    return Inertia::render('about');
})->name('about');

Route::get('/contact', function () {
    return Inertia::render('contact');
})->name('contact');

Route::get('/account', function () {
    return Inertia::render('account');
})->middleware(['auth', 'verified'])->name('account');

Route::get('/login', function () {
    return Inertia::render('Auth/login');
})->name('login');

Route::redirect('/admin', '/admin/dashboard', 301);

Route::middleware('guest')->get('/admin/login', function () {
    return Inertia::render('admin/login');
})->name('adminLogin');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::resource('/catalog', CatalogController::class);

Route::resource('/motorcycle', ShowcaseController::class);

Route::resource('/brands', BrandsController::class);

Route::resource('/motorcycles', MotorcycleController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('adminAuth')->group(function () {
    Route::resource('/admin/dashboard', AdminDashboardController::class);
});

require __DIR__ . '/auth.php';
