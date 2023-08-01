<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use App\Models\Course;
use PDF;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function showCertificate($courseId)
    {
        $user = Auth::user();
        $course = Course::find($courseId);
        $date = date('Y-m-d');

        return view('certificate', ['user' => $user, 'course' => $course, 'date' => $date]);
    }

    public function downloadCertificate($courseId)
    {
        $user = Auth::user();
        $course = Course::find($courseId);
        $date = date('Y-m-d');

        $pdf = PDF::loadView('certificate', ['user' => $user, 'course' => $course, 'date' => $date, 'pdf' => true]);

        return $pdf->download('certificate.pdf');
    }


}
