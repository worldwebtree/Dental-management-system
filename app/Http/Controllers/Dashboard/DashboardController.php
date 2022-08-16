<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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
        $dentist = $user->dentist;
        $patient = $user->patient;
        $contact = $user->contacts;
        $contacts = Contact::count();

        if ($user->role == "Dentist") {

            $patients = Patient::count();

            $current_date = Carbon::now();

            $transactions = Transaction::count();

            $appointments = 0;

            $completed_appointments = 0;

            $canceled_appointments = 0;

            if ($dentist != null) {

                $appointments = $user
                ->dentist
                ->appointments()
                ->where(
                    [
                        'dentist_id' => $user->dentist->id,
                        'status' => 'Active'
                    ],
                )
                ->count();

                $completed_appointments = $user
                ->dentist
                ->appointments()
                ->where(
                    [
                        'dentist_id' => $user->dentist->id,
                        'status' => 'Completed'
                    ],
                )
                ->count();

                $canceled_appointments = $user
                ->dentist
                ->appointments()
                ->where(
                    [
                        'dentist_id' => $user->dentist->id,
                        'status' => 'Canceled'
                    ],
                )
                ->count();
            }

            return View::make('Dashboard.dashboard',
            compact(['patients',
                    'current_date',
                    'appointments',
                    'completed_appointments',
                    'canceled_appointments',
                    'contacts',
                    'transactions'
            ]));

        } elseif($user->role == "Patient") {

            $dentists = Dentist::count();

            $appointments = 0;

            $completed_appointments = 0;

            $canceled_appointments = 0;

            $transactions = 0;

            if ($patient != null) {

                $appointments = $user
                ->patient
                ->appointments()
                ->where(
                    [
                        'patient_id' => $user->patient->id,
                        'status' => 'Active'
                    ],
                )
                ->count();

                $completed_appointments = $user
                ->patient
                ->appointments()
                ->where(
                    [
                        'patient_id' => $user->patient->id,
                        'status' => 'Completed'
                    ],
                )
                ->count();

                $canceled_appointments = $user
                ->patient
                ->appointments()
                ->where(
                    [
                        'patient_id' => $user->patient->id,
                        'status' => 'Canceled'
                    ],
                )
                ->count();

                $transactions = $user
                ->patient
                ->transaction(
                    [
                        'patient_id' => $user->patient->id,
                    ],
                )
                ->count();
            }

            $contact = 0;

            if ($contact != null) {

                $contacts = $user
                ->contact
                ->count();
            }

            $current_date = Carbon::now();

            return View::make('Dashboard.dashboard',
            compact(['dentists',
                'current_date',
                'appointments',
                'completed_appointments',
                'canceled_appointments',
                'contacts',
                'transactions'
            ]));
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
