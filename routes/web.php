<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeaturedVideosController;
use App\Http\Controllers\AllVideosController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend Routes
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/play', [PagesController::class, 'play']);

// Backend Routes
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/featured-videos', [FeaturedVideosController::class, 'index']);

Route::get('/all-videos', [AllVideosController::class, 'index']);

// Get videos by day
Route::get('/day/{day}', [AllVideosController::class, 'selectDay']);

// Account setting
Route::get('/account-setting', [UserController::class, 'index']);
Route::post('/account-setting/update', [UserController::class, 'update']);
// social account update
Route::post('/social/update', [UserController::class, 'socialUpdate']);
