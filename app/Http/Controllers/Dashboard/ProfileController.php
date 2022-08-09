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
        $check = $request->validate([
            'name' => ['string'],
            'gender' => ['string'],
            'phone' => ['integer'],
            'address' => ['string'],
            'country' => ['string'],
            'city' => ['string'],
            'age' => ['integer', 'min:25', 'max:100'],
            'dob' => ['date'],
            'specialization' => ['string'],
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

        $request
        ->user()
        ->dentist()
        ->updateOrCreate(
            ['user_id' => $request->user()->id],
        [
            'phone' => $request['phone'],
            'address' => $request['address'],
            'country' => $request['country'],
            'city' => $request['city'],
            'age' => $request['age'],
            'birthDate' => $request['dob'],
            'specialization' => $request['specialization'],
            'avatar' => $avatar_name,
        ]);

        return redirect()
        ->route('profile')
        ->with('updated', 'Your Profile has been updated!');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePatient(Request $request)
    {
        dd($request);
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
