<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        return View::make('Dashboard.profile');
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
    public function storeDentist(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'phone' => ['required', 'numeric'],
            'address' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'age' => ['required', 'integer', 'min:25', 'max:100'],
            'dob' => ['required', 'date'],
            'specialization' => ['required','string'],
        ]);

        if (empty($request->hasFile('dentistAvatar')) && $request['dentistAvatar'] == null) {

            $avatar_name = $request->user()->dentist->avatar;

        } else {

            $file = $request->file('dentistAvatar');

            $avatar_name = $file->hashName();

            $file->move(public_path('storage/profileAvatars'), $avatar_name);
        }

        $request
        ->user()
        ->update([
            'name' => $request['name'],
            'gender' => $request['gender'],
        ]);

        if (! empty($request->user()->dentist())) {

            $request
            ->user()
            ->dentist()
            ->where('user_id', $request->user()->id)
            ->update([
                'phone' => $request['phone'],
                'address' => $request['address'],
                'country' => $request['country'],
                'city' => $request['city'],
                'age' => $request['age'],
                'birthDate' => $request['dob'],
                'specialization' => $request['specialization'],
                'avatar' => $avatar_name,
            ]);

        } elseif (empty($request->user()->dentist())) {
            $request
            ->user()
            ->dentist()
            ->create([
                'user_id' => $request->user()->id,
                'phone' => $request['phone'],
                'address' => $request['address'],
                'country' => $request['country'],
                'city' => $request['city'],
                'age' => $request['age'],
                'birthDate' => $request['dob'],
                'specialization' => $request['specialization'],
                'avatar' => $avatar_name,
            ]);
        }

        return redirect()
        ->route('profile')
        ->with('success', 'Your Profile has been updated successfully!');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePatient(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'phone' => ['required', 'numeric'],
            'address' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'age' => ['required', 'integer', 'min:25', 'max:100'],
            'dob' => ['required', 'date'],
            'Occupation' => ['required','string'],
        ]);

        if (empty($request->hasFile('patientAvatar')) && $request['patientAvatar'] == null) {

            $avatar_name = $request->user()->patient->avatar;

        } else {

            $file = $request->file('patientAvatar');

            $avatar_name = $file->hashName();

            $file->move(public_path('storage/profileAvatars'), $avatar_name);
        }

        $request
        ->user()
        ->update([
            'name' => $request['name'],
            'gender' => $request['gender'],
        ]);

        if (! empty($request->user()->patient())) {

            $request
            ->user()
            ->patient()
            ->where('user_id', $request->user()->id)
            ->update([
                'phone' => $request['phone'],
                'address' => $request['address'],
                'country' => $request['country'],
                'city' => $request['city'],
                'age' => $request['age'],
                'birthDate' => $request['dob'],
                'occupation' => $request['Occupation'],
                'avatar' => $avatar_name,
            ]);

        } elseif (empty($request->user()->patient())) {

            $request
            ->user()
            ->patient()
            ->create([
                'user_id' => $request->user()->id,
                'phone' => $request['phone'],
                'address' => $request['address'],
                'country' => $request['country'],
                'city' => $request['city'],
                'age' => $request['age'],
                'birthDate' => $request['dob'],
                'occupation' => $request['Occupation'],
                'avatar' => $avatar_name,
            ]);
        }

        return redirect()
        ->route('profile')
        ->with('success', 'Your Profile has been updated successfully!');
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
    public function updateDentist(Request $request, $id)
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
    public function updatePatient(Request $request, $id)
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
