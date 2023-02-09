<?php

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

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ServicesControler;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactUsController::class, 'sendMessage']);

Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');
Route::post('/doctor', [DoctorController::class, 'sendMessage']);

Route::get('/services', [ServicesControler::class, 'index'])->name('services');
