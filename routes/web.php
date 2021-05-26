<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeaturedVideosController;
use App\Http\Controllers\AllVideosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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
Route::get('/play/{code}', [PagesController::class, 'play']);


// User Routes
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginFunction']);
Route::post('/logout', [LoginController::class, 'logout']);


// Backend Routes
Route::get('/dashboard', [DashboardController::class, 'index']);


// Featured Videos
Route::get('/featured-videos', [FeaturedVideosController::class, 'index']);
Route::get('/featured-videos/edit/{id}', [FeaturedVideosController::class, 'edit']);
Route::post('featured-video/update/{id}', [FeaturedVideosController::class, 'update']);


// All videos
Route::get('/all-videos', [AllVideosController::class, 'index']);
// Add video
Route::get('/add-video', [AllVideosController::class, 'addForm']);
Route::post('/add-video', [AllVideosController::class, 'addVideo']);
// Edit Video
Route::get('/video/edit/{id}', [AllVideosController::class, 'editForm']);
Route::post('/video/update/{id}', [AllVideosController::class, 'update']);
Route::get('/video/delete/{id}', [AllVideosController::class, 'delete']);


// Get videos by day
Route::get('/day/{day}', [AllVideosController::class, 'selectDay']);

// Account setting
Route::get('/account-setting', [UserController::class, 'index']);
Route::post('/account-setting/update', [UserController::class, 'update']);
// social account update
Route::post('/social/update', [UserController::class, 'socialUpdate']);
