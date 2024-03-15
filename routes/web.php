<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/register', [PagesController::class, 'register'])->name('register');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/about-us', [PagesController::class, 'about_us'])->name('about_us');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('contact_us');
Route::get('/track-order', [PagesController::class, 'track_order'])->name('track_order');
Route::get('/privacy-policy', [PagesController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms-condition', [PagesController::class, 'terms_condition'])->name('terms_condition');
Route::get('/user-profile', [PagesController::class, 'user_profile'])->name('user_profile');
// Route::get('/track-order', [PagesController::class, 'track_order'])->name('track_order');
// Route::get('/track-order', [PagesController::class, 'track_order'])->name('track_order');
// Route::get('/track-order', [PagesController::class, 'track_order'])->name('track_order');
// Route::get('/track-order', [PagesController::class, 'track_order'])->name('track_order');
// Route::get('/track-order', [PagesController::class, 'track_order'])->name('track_order');
// Route::get('/track-order', [PagesController::class, 'track_order'])->name('track_order');
// Route::get('/track-order', [PagesController::class, 'track_order'])->name('track_order');
