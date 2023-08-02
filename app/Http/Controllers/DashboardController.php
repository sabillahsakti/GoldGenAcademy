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
            return redirect()->route('dashboard.courses')->with('error', 'data tidak ditemukan');
        }

        $courses->delete();
        return redirect()->route('dashboard.courses');
    }

    public function editcourses($id){
        $courses = Course::find($id);
        $fields = Field::select('id','name')->get();
        // return $destinations;
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
            return redirect()->route('dashboard.orders.index')->with('error', 'Order not found');
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


}
