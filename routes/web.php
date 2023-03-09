<?php

use App\Http\Controllers\Dashboard\AppointmentController;
use App\Http\Controllers\Dashboard\ContactPatientController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DentistController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\SearchController;
use App\Http\Controllers\Dashboard\TransactionController;
use App\Http\Controllers\FrontEnd\FrontendController;
use App\Http\Controllers\FrontEnd\MakeAppointmentController;
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

Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index')->name('home');

});

Route::controller(ContactPatientController::class)->group(function () {

    Route::post('/contact', 'store')
    ->name('contact.store');

});

Route::controller(MakeAppointmentController::class)->group(function () {

    Route::post('/make-appointment', 'store')
    ->name('make.appointment.store');

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

        Route::get('/patient-delete/{id}', 'destroy')
        ->name('patients.delete');

    });

    Route::controller(AppointmentController::class)
    ->group(function () {

        Route::get('/appointments', 'index')
        ->name('appointments');

        Route::post('/appointments_store', 'store')
        ->name('appointments.store');

        Route::post('/appointments_get_appointment', 'get_appointment')
        ->name('appointments.get.appointment');

        Route::get('/appointments/cancel/{id}', 'cancel')
        ->name('appointments.cancel');

        Route::get('/appointments/completed/{id}', 'completed')
        ->name('appointments.completed');

        Route::get('/appointments_delete/{id}', 'destroy')
        ->name('appointments.delete');

    });

    Route::controller(ContactPatientController::class)
    ->group(function () {

        Route::get('/contact', 'index')
        ->name('contacts');

        Route::get('/contact-delete/{id}', 'destroy')
        ->name('contacts.delete');

    });

    Route::controller(DentistController::class)
    ->group(function () {

        Route::get('/dentist', 'index')
        ->name('dentists');

    });

    Route::controller(TransactionController::class)
    ->group(function () {

        Route::get('/transaction', 'index')
        ->name('transactions');

    });

    Route::controller(SearchController::class)
    ->group(function () {

        Route::post('/search', 'store')
        ->name('search.store');

    });
});

require __DIR__.'/auth.php';
