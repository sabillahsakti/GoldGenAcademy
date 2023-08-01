<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function courses(){
        $courses = Course::all(); // Fetch all courses from the database

        return view('dashboard.courses', compact('courses'));
    }
    public function deletecourses($id)
    {
        $courses = Course::find($id);

        if (! $courses) {
            return redirect()->route('dashboard.courses')->with('error', 'data tidak ditemukan');
        }

        $courses->delete();
        return redirect()->route('dashboard.courses');
    }
}
