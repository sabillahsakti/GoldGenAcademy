<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use App\Models\course;
use App\Models\field;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    //Course
    public function courses()
    {
        $courses = Course::all(); // Fetch all courses from the database

        return view('dashboard.courses.index', compact('courses'));
    }
    public function deletecourses($id)
    {
        $courses = Course::find($id);

        if (!$courses) {
            return redirect()->route('dashboard.courses')->with('error', 'Course not found');
        }

        $courses->delete();
        return redirect()->route('dashboard.courses')->with('success', 'Course deleted successfully');
    }


    public function editcourses($id){
            $courses = Course::find($id);
            $fields = Field::select('id','name')->get();
            if (!$courses) {
                return view('dashboard.courses.create');
            }
        
            return view('dashboard.courses.edit', compact('courses','fields'));
    }



    public function updatecourses($id,Request $request){
        $courses = Course::find($id);
        $courses->name = $request->input('name');
        $courses->price = $request->input('price');
       
        $courses->save();

        $courses = Course::all();
        return view('dashboard.courses.index', compact('courses'));
    
    }


    public function user()
    {
        $users = User::all(); // Fetch all courses from the database

        return view('dashboard.users.index', compact('users'));
    }
    // public function createuser()
    // {
       

    //     return view('dashboard.users.cre');
    // }


    public function deleteusers($id)
    {
        $courses = User::find($id);

        if (!$courses) {
            return redirect()->route('dashboard.users')->with('error', 'data tidak ditemukan');
        }

        $courses->delete();
        return redirect()->route('dashboard.users');
    }


    //order
    public function orders()
    {
        $orders = Order::all(); // Fetch all courses from the database

        return view('dashboard.orders.index', compact('orders'));
    }

    public function editOrder($id)
    {
        $order = Order::find($id);
        return view('dashboard.orders.edit', compact('order'));
    }

    public function updateOrder(Request $request, $id)
    {
        $order = Order::find($id);
        $order->user_id = $request->input('user_id');
        $order->course_id = $request->input('course_id');
        $order->status = $request->input('status');
        $order->save();

        $orders = Order::all();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return view('dashboard.index');
        }

        $order->delete();
        return view('dashboard.orders.index', compact('orders'));
    }

    //order
    public function certificates()
    {
        $certificates = certificate::all(); // Fetch all courses from the database

        return view('dashboard.certificates.index', compact('certificates'));
    }




    public function logoutadmin ()
    {
        Auth::logout();
        return redirect('login');
    }

    public function createCourse()
    {
        $fields = Field::select('id','name')->get();
        return view('dashboard.courses.create', compact('fields'));
    }

    public function storeCourse(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB maximum size
            'field_id' => 'required|integer',
        ]);

        $image = $request->file('image');
        $folder = 'Assets/images/';

        $filePath = $folder . $image->getClientOriginalName();
        $image->move($folder, $image->getClientOriginalName());

        $course = new Course();
        $course->name = $request->name;
        $course->price = $request->price;
        $course->image = $filePath;
        $course->field_id = $request->field_id;
        $course->save();

        return view('dashboard.index');
    }


}
