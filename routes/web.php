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
Route::get('/about-us', [PagesController::class, 'about_us'])->name('about_us');
Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('contact_us');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
