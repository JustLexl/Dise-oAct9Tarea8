<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('landingpage');
})->name('landingpage');

Route::get('/landingpage', function () {
    return view('landingpage');
});

Auth::routes(['verify' => true]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/home', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::get('/register/verify/{code}', [App\Http\Controllers\GuestController::class, 'verify'])->name('register.verify'); 