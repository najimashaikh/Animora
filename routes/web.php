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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/browse/{category?}', [HomeController::class, 'browse'])->name('browse');
Route::get('/asset/{slug}', [HomeController::class, 'showAsset'])->name('asset.show');
Route::get('/pipeline', [HomeController::class, 'pipeline'])->name('pipeline');
