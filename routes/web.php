<?php

use App\Http\Controllers\Dashboard\AppointmentController;
use App\Http\Controllers\Dashboard\ContactPatientController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DentistController;
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

Route::middleware(['auth'])->group(function () {

    Route::controller(DashboardController::class)->group(function (){
        Route::get('/dashboard', 'index')
        ->name('dashboard');
    });

    Route::controller(ProfileController::class)
    ->group(function () {

        Route::get('/profile', 'index')
        ->name('profile');

        Route::post('/profile_update_dentist', 'storeDentist')
        ->name('profile.store.dentist');

        Route::post('/profile_update_patient', 'storePatient')
        ->name('profile.store.patient');

    });

    Route::controller(PatientController::class)
    ->group(function () {

        Route::get('/patient', 'index')
        ->name('patients');

    });

    Route::controller(AppointmentController::class)
    ->group(function () {

        Route::get('/appointments', 'index')
        ->name('appointments');

    });

    Route::controller(ContactPatientController::class)
    ->group(function () {

        Route::get('/contact', 'index')
        ->name('contacts');

        Route::get('/delete/{id}', 'destroy')
        ->name('delete');

    });

    Route::controller(DentistController::class)
    ->group(function () {

        Route::get('/dentist', 'index')
        ->name('dentists');

    });

});

require __DIR__.'/auth.php';
