<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MapLocation;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/map', function () {
    return view('livewire.unesp-location');
})->name('map');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\CreateController::class, 'Create'])->name('features.Create');

Route::any('/features', [App\Http\Controllers\FeatureController::class, 'store'])->name('features.store');
