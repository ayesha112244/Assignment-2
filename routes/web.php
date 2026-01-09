<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DestinationController;


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| Itineraries
|--------------------------------------------------------------------------
*/

// Home / Index (LOGIN REQUIRED)
Route::get('/', [ItineraryController::class, 'index'])
    ->middleware('auth')
    ->name('home');

// About (public)
Route::get('/about', function () {
    return view('about');
});

// Create itinerary (LOGIN REQUIRED)
Route::get('/itineraries/create', [ItineraryController::class, 'create'])
    ->middleware('auth')
    ->name('itineraries.create');

// Store itinerary
Route::post('/itineraries', [ItineraryController::class, 'store'])
    ->middleware('auth')
    ->name('itineraries.store');

// Show itinerary
Route::get('/itineraries/{itinerary}', [ItineraryController::class, 'show'])
    ->middleware('auth')
    ->name('itineraries.show');

// Edit itinerary
Route::get('/itineraries/{itinerary}/edit', [ItineraryController::class, 'edit'])
    ->middleware(['auth','can:manage-itineraries,itinerary'])
    ->name('itineraries.edit');

// Update
Route::put('/itineraries/{itinerary}', [ItineraryController::class, 'update'])
    ->middleware(['auth','can:manage-itineraries,itinerary'])
    ->name('itineraries.update');

// Delete
Route::delete('/itineraries/{itinerary}', [ItineraryController::class, 'destroy'])
    ->middleware(['auth','can:manage-itineraries,itinerary'])
    ->name('itineraries.destroy');
    
// Reviews (AUTHENTICATED USERS ONLY)
Route::post(
    '/itineraries/{itinerary}/reviews',
    [ReviewController::class, 'store']
)->middleware('auth')->name('reviews.store');

Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])
    ->middleware('auth')
    ->name('reviews.destroy');

Route::get('/destinations', [DestinationController::class, 'index'])
    ->name('destinations.index');

Route::get('/destinations/{country}', [DestinationController::class, 'show'])
    ->name('countries.show');

    
