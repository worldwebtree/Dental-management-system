<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MakeAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'service' => ['required', 'string'],
            'dentist_id' => ['required', 'string'],
            'date' => ['required', 'date'],
            'time' => ['required'],
        ]);

        if (!$request->user())
            return redirect()
            ->route('login')
            ->with('not_authenticated', 'Please login first then try to make appointment!');

        $user = $request->user();

        $appointment_dateTime = $request['date'].''.$request['time'];

        $user->patient
        ->appointments()
        ->create([
            'user_id' => $user->id,
            'patient_id' => $user->patient->id,
            'dentist_id' => $request['dentist_id'],
            'patient-name' => $user->name,
            'appointment-dateTime' => Carbon::parse($appointment_dateTime)->toDateTime(),
            'dentist_service' => $request['service'],
            'status' => 'Active',
        ]);

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
    public function destroy($id)
    {
        //
    }
}
