<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Dentist;
use App\Models\Patient;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role == "Dentist") {

            $patients = Patient::count();

            $current_date = Carbon::now();

            $transactions = Transaction::count();

            $appointments = $user
            ->appointments
            ->where('user_id', $user->id)
            ->count();

            $contacts = $user
            ->contact
            ->count();

            return View::make('Dashboard.dashboard',
            compact('patients', 'current_date', 'appointments', 'contacts', 'transactions'));

        } elseif($user->role == "Patient") {

            $dentists = Dentist::count();

            $transactions = Transaction::count();

            $appointments = $user
            ->appointments
            ->where('user_id', $user->id)
            ->count();

            $contacts = $user
            ->contact
            ->count();

            $current_date = Carbon::now();

            return View::make('Dashboard.dashboard',
            compact('dentists', 'appointments', 'contacts', 'current_date', 'transactions'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function show()
    {

    }

        /**
     * Display the specified resource.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function showPatients()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
