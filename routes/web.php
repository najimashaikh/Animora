<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/browse/{category?}', [HomeController::class, 'browse'])->name('browse');
Route::get('/asset/{slug}', [HomeController::class, 'showAsset'])->name('asset.show');
Route::get('/pipeline', [HomeController::class, 'pipeline'])->name('pipeline');

// Dedicated Authentication Pages & Actions
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');

// Contact Inquiries
Route::post('/api/contact/submit', [AuthController::class, 'submitContact'])->name('contact.submit');
