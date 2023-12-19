<?php

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

// ======================================= Admin Routes ===================================================================
Route::get('/lead', function () {
    return view('admin.home');
});

// ======================================= User Routes ===================================================================
Route::get('/', function () {
    return view('user.home');
});

Route::get('/what-we-do', function () {
    return view('user.what-we-do');
});

Route::get('/who-we-are', function () {
    return view('user.who-we-are');
});

Route::get('/insights', function () {
    return view('user.insights');
});

Route::get('/carrers', function () {
    return view('user.carrers');
});

Route::get('/contact', function () {
    return view('user.contact');
});


// ============================================================================================================
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
