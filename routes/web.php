<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;



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



Route::get('/welcome', 'ImagesController@showWelcome')->name('welcome');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/images/create', [ImagesController::class, 'create'])->name('images.create');

Route::post('/images/store', [ImagesController::class, 'store'])->name('images.store');

Route::get('/images', [ImagesController::class, 'index'])->name('images.index');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');








