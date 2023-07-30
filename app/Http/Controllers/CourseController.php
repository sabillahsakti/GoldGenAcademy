<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
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
}
