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

// All Listings 
Route::get('/', [ListingController::class, 'index']);

// SIngle Listing

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
