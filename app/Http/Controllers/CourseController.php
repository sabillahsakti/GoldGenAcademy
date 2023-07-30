<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Support\Facades\Auth; // Import the Auth facade


class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Fetch all courses from the database

        return view('courses', compact('courses'));
    }
    public function purchase($id)
    {
        // Fetch the course based on the provided $id
        $course = Course::find($id);

        // Get the authenticated user from the session
        $user = Auth::user();

        // Redirect the user to the purchase confirmation view
        return view('purchase', compact('course', 'user'));
    }

    public function paymentConfirmation(Request $request, $id)
    {
        // Fetch the course based on the provided $id
        $course = Course::find($id);

        // Get the authenticated user from the session
        $user = Auth::user();

        // Validate the uploaded image (you can add more validation rules if needed)
        $request->validate([
            'payment_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB maximum size
        ]);

        // Store the uploaded image in a public folder
        $imagePath = $request->file('payment_image')->store('payment_confirmations', 'public');

        // Create a new order record
        $order = new Order();
        $order->name = $course->name;
        $order->user_id = $user->id;
        $order->course_id = $course->id;
        $order->payment_image_path = $imagePath;
        $order->status = 'Pending'; // You can set the initial status as "Pending"
        $order->save();

        
        // Redirect the user to a confirmation/thank you page or do other actions
        return redirect('/')->with('success', 'Thank You! Your payment has been confirmed.');
    }
}
