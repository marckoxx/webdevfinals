<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\TestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/about', function(){
    return Inertia::render('about');
})->name('about');

Route::get('/contact', function(){
    return Inertia::render('contact');
})->name('contact');

Route::get('/account', function(){
    return Inertia::render('account');
})->name('account');

Route::get('/login', function(){
    return Inertia::render('login');
})->name('login');

Route::resource('/catalog',CatalogController::class);

Route::resource('/motorcycle', ShowcaseController::class);

Route::resource('/brands',BrandsController::class);

Route::resource('/motorcycles',MotorcycleController::class);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
