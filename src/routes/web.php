<?php

use Illuminate\Support\Facades\Route;


use App\Application\Http\Controllers\Web\{
    HomeController,
    AboutController,
    ContactController,
    GalleryController,
    ServiceController,
    AppointmentController,
    FeedbackController,
    BookingController,
};
use App\Application\Http\Controllers\Web\Auth\AuthSessionController;
use App\Application\Http\Controllers\Web\Auth\RegisteredUserController;

Route::get('/', [HomeController::class, 'index']);
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


/* Auth */

// Route::middleware('guest:client')->group(function () {


//     Route::get('login', [AuthSessionController::class, 'create'])->name('login');

//     Route::post('login', [AuthSessionController::class, 'store']);
// });
// Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
// Route::post('register', [RegisteredUserController::class, 'store']);
// /* Auth */

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/about-us', [AboutController::class, 'index'])->name('about');

// Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Route::get('/service', [ServiceController::class, 'index'])->name('services');

// Route::controller(ContactController::class)->prefix('contact-us')->name('contact.')->group(function () {
//     Route::get('/', 'index')->name('index');
//     Route::post('/store', 'store')->name('store');
// });

// Route::middleware('clientAuth:client')->group(function () {

//     Route::post('logout', [AuthSessionController::class, 'destroy'])->name('logout');

//     Route::controller(AppointmentController::class)->prefix('appointment')->name('appointment.')->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::post('/store', 'store')->name('store');
//         Route::get('/getDoctors/{id}', 'getDoctors')->name('getDoctor');
//     });

//     Route::controller(FeedbackController::class)->prefix('feedback')->name('feedback.')->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::post('/store', 'store')->name('store');
//     });

//     Route::get('/booking', [BookingController::class, 'index']);
// });