<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;


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
        // return $destinations;
        return view('dashboard.courses.edit', compact('courses'));

    }

    public function updatecourses($id,Request $request){
        Course::where('id', $id)->update([
            'name'=> $request->name,
            'price' => $request->price,
            'image' => $request->image,
            'field_id'=>$request->field_id,
        ]);
        return redirect()->route('dashboard.destinasi.index');
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
        return redirect()->route('dashboard.orders.index');
    }


}
