<?php

use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\ProfileController;
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

Route::get('/', function () {
    return view('frontend');
});

Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::controller(ProfileController::class)
->middleware(['auth'])
->group(function () {

    Route::get('/profile', 'index')
    ->name('profile');

});

Route::controller(PatientController::class)
->middleware(['auth'])
->group(function () {

    Route::get('/patient', 'index')
    ->name('patient');

});
require __DIR__.'/auth.php';
