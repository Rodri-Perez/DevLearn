<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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



Route::view('/',[UserController::class,'welcome'])->name('index');

// Route::get('/about',[UserController::class,'about'])->name('about');

// Route::get('/courses',[UserController::class,'courses'])->name('courses');

// Route::get('/info',[UserController::class,'info'])->name('info');

// Route::get('/support',[UserController::class,'support'])->name('support');

// Route::get('/sigin',[UserController::class,'sigin'])->name('login');

// Route::get('/regi',[UserController::class,'regi'])->name('regi');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
