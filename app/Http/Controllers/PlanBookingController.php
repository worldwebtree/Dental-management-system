<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PlanBooking;

class PlanBookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'plan_name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        PlanBooking::create($request->all());

        return redirect()->back()->with('success', 'Plan booked successfully! Our team will contact you soon.');
    }

    public function index()
    {
        $bookings = PlanBooking::latest()->get();
        return view('Dashboard.plan_bookings', compact('bookings'));
    }

    public function delete($id)
    {
        PlanBooking::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Booking deleted successfully.');
    }
}
