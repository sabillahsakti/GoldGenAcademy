<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class PaymentController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function show()
    {
        return view('payment');
    }

    public function charge(Request $request)
    {
        $user = $request->user();
        $course = Course::find($request->course_id);
        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $course->price,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'last_name' => '',
                'email' => 'test@example.com',
                'phone' => '081234567890',
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        // Create a new order record
        $order = new Order();
        $order->name = $course->name;
        $order->user_id = $user->id;
        $order->course_id = $course->id;
        $order->status = 'Pending'; 
        $order->save();

        return response()->json($snapToken);
    }
}
