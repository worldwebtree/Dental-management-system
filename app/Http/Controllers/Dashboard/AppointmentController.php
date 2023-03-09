<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index(Appointment $appointment, User $users)
    {
        $user = Auth::user();

        $dentists = $user->dentist;

        $patients = $user->patient;

        if (!empty($users->dentist()))

            $all_dentists = $users
            ->where('role', 'Dentist')
            ->with('dentist')
            ->get();

        $appointments = [];

        if (!empty($dentists))
            $appointments = $appointment
            ->where('dentist_id', $dentists->id)
            ->get();

        if (!empty($patients))
            $appointments = $appointment
            ->where('patient_id', $patients->id)
            ->get();

        return View::make('Dashboard.appointment', compact('appointments', 'all_dentists'));
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_appointment(Request $request)
    {
        $request->validate([
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['required'],
            'dentist_id' => ['required'],
            'dentist_service' => ['required', 'string'],
        ]);

        $service_and_price = explode("-", $request['dentist_service']);

        $user = $request->user();

        $appointment_dateTime = $request['appointment_date'].''.$request['appointment_time'];

        $appointments = $user
        ->appointments()
        ->create([
            'user_id' => $user->id,
            'patient_id' => $user->patient->id,
            'dentist_id' => $request['dentist_id'],
            'patient-name' => $user->name,
            'appointment-dateTime' => Carbon::parse($appointment_dateTime)->toDateTime(),
            'dentist_service' => $service_and_price[0],
            'status' => 'Active',
        ]);

        $appointments
        ->transaction()
        ->create(
            [
                'patient_id' => $appointments->patient_id,
                'appointment_id' => $appointments->id,
                'payment' => $service_and_price[1],
            ]
        );

        return redirect()
        ->route('appointments')
        ->with('success', 'Appointment has been created successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'phone' => ['required', 'numeric'],
            'address' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'age' => ['required', 'integer','max:100'],
            'dob' => ['required', 'date'],
            'Occupation' => ['required', 'string'],
            'password' => ['required', 'max:8'],
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['required'],
            'status' => ['required', 'string'],
            'dentist_id' => ['nullable'],
            'appointment_payment' => ['required', 'numeric'],
            'dentist_service' => ['required', 'string']
        ]);

        if($request->user()->dentist == null)
            return redirect()
            ->route('appointments')
            ->with('info', 'Please update Dentist profile before making an appointment');

        $User = $user->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'Patient',
            'gender' => $request['gender'],
        ]);

        $patient = $User
        ->patient()
        ->create(
        [
            'user_id' => $User->id,
            'phone' => $request['phone'],
            'address' => $request['address'],
            'country' => $request['country'],
            'city' => $request['city'],
            'age' => $request['age'],
            'birthDate' => $request['dob'],
            'occupation' => $request['Occupation'],
        ]);

        $appointment_dateTime = $request['appointment_date'].''.$request['appointment_time'];

        $appointments = $patient
        ->appointments()
        ->create(
            [
                'user_id' => $patient->user_id,
                'patient_id' => $patient->id,
                'dentist_id' => $request['dentist_id'],
                'patient-name' => $request['name'],
                'appointment-dateTime' => Carbon::parse($appointment_dateTime)->toDateTime(),
                'dentist_service' => $request['dentist_service'],
                'status' => $request['status'],
            ]
        );

        $appointments
        ->transaction()
        ->create(
            [
                'patient_id' => $appointments->patient_id,
                'appointment_id' => $appointments->id,
                'payment' => $request['appointment_payment'],
            ]
        );

        return redirect()
        ->route('appointments')
        ->with('success', 'Appointment has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function cancel($id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update(
            [
                'status' => 'Canceled',
            ]
        );

        return redirect()
        ->route('appointments')
        ->with('success', 'Appointment status has been updated successfully!');
    }

            /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function completed($id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update(
            [
                'status' => 'Completed',
            ]
        );

        return redirect()
        ->route('appointments')
        ->with('success', 'Appointment status has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment, $id)
    {
        $delete = $appointment
        ->findOrFail($id);

        $delete->delete();

        return redirect()
        ->route('appointments')
        ->with('success', 'Appointment has been deleted successfully!');
    }
}
