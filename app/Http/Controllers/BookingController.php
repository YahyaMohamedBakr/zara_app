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

        $booking = Booking::create($validated);

        $emailContent = "تم حجز خدمة جديدة مع التفاصيل التالية:\n\n";
        $emailContent .= "الاسم: " . $booking->name . "\n";
        $emailContent .= "رقم الهاتف: " . $booking->phone . "\n";
        $emailContent .= "الخدمة المطلوبة: " . $booking->service . "\n";
        $emailContent .= "الرسالة: " . ($booking->message ?? 'لا توجد رسالة') . "\n";

    //   try {
    Mail::raw($emailContent, function ($message) {
        $message->to('kyanzaramedical@gmail.com')
                ->subject('تم استلام حجز جديد');
   });

// } catch (\Exception $e) {
//     return response()->json([
//         'success' => false,
//         'message' => 'حدث خطأ أثناء إرسال البريد الإلكتروني: ' . $e->getMessage(),
//     ]);
// }

        return response()->json([
            'success' => true,
            'message' => 'تم إرسال النموذج بنجاح!'
        ]);

    }
}
