<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

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
    return view('index');
})->name('index');

Route::get('/convert', function () {
    return view('convert');
})->name('convert');

Route::get('/about', function () {
    return redirect('/#what');
})->name('about');

Route::get('/contact', function () {
    return redirect('/#contact');
})->name('contact');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/logres', function () {
    return view('logres');
})->name('logres');

Route::resource('add', ResourceController::class);