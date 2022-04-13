<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
// use Laravel\Socialite\Facades\Socialite;


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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('login/google', [AuthenticatedSessionController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [AuthenticatedSessionController::class, 'handleGoogleCallback']);

Route::view('about', 'about')->name('about');
Route::view('service', 'service')->name('service');
Route::view('contact', 'contact')->name('contact');
Route::view('vehicles', 'vehicles')->name('vehicles');
Route::view('vehicle/details', 'vehicle_details')->name('vehicle.details');

require __DIR__.'/auth.php';
