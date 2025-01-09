<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        //Mail::to('y.bakr1010@gmail.com')->send();
        return response()->json([
            'success' => true,
            'message' => 'تم إرسال النموذج بنجاح!'
        ]);

    }
}
