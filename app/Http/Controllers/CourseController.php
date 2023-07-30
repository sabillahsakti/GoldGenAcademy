<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

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

        // Add your logic for the purchase functionality here
        // For example, you might want to add the course to the user's purchased courses list.

        // Redirect the user to a "Thank You" page or a confirmation page.
        return view('purchase_confirmation', compact('course'));
    }
}
