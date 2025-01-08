<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //


    public function index()
    {
        return view('dashboard', [
            'bookings' => Booking::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            // 'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'message' => 'nullable',
        ]);

        Booking::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'تم إرسال النموذج بنجاح!'
        ]);

    }
}
