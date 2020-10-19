<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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

// Route view - Site page routes
Route::view('/', 'web.home')->name('web.home');
Route::view('/form-one', 'web.form-one')->name('web.form-one');
Route::view('/form-two', 'web.form-two')->name('web.form-two');

// Route view - to the data view page of the site
Route::get('/data', DataController::class)->name('data.view');

// Form Route
Route::post('request', FormController::class)->name('form.request');
