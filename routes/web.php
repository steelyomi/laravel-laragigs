<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

// Cmmon Resouce Routes:
// index - Show all listings
// show- Show single listing
// create- Show form to create new listing
// store- Store new listing
// edit- Show form to edit listing
// update- Update listing
// destroy- Delete listing

// All Listings 
Route::get('/', [ListingController::class, 'index']);

// Show Create Form

Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data

Route::post('/listings', [ListingController::class, 'store']);

// Show Edit form

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing

Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Route::get('/hello', function () {
//     return response('Hello World');
// });

// Route::get('/posts/{id}', function($id) {
//     ddd($id);
//     return response('Post ' .$id);
// })-> where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     // dd($request);
//     return $request->name . ' ' . $request->age;
    
// });
