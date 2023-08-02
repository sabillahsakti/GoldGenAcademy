<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\order;

class AuthController extends Controller
{
       //nampilin register
    public function viewregister(){
        return view('register');
    }

    public function viewdashboard(){
        return view('dashboard.index');
    }
    //proses register
    public function register(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'role'=> 'member',
        ]);

        return redirect('login');
    }

     //nampilin login
     public function viewlogin(){
        return view('login');
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $isSuccessLogin = Auth::attempt($data);
        
        if ($isSuccessLogin){
            // Authentication successful, save the user session
            $user = Auth::user();
            $request->session()->put('user', $user);

            if ($user->role == 'admin') {
                return view('dashboard.index', ['user' => $user]);
            } else {
                return view('index', ['user' => $user]);
            }
        }
        else{
            return view('login');
        }

    }

    public function logout()
    {
        Auth::logout();
        session()->forget('user'); // Clear the 'user' session

        return redirect('/');
    }

    public function myCourses()
    {
        // Get the authenticated user's orders along with their related courses
        $userOrders = Order::where('user_id', auth()->id())->with('course')->get();

        return view('myCourses', ['userOrders' => $userOrders]);
    }

    // Add this method in your UserController.php file

    public function showChangePasswordForm()
    {
        // This will return the change password view
        return view('changePassword');
    }

    public function changePassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Get the current authenticated user
        $user = Auth::user();

        // Check if the old password is correct
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'The provided password does not match our records.']);
        }

        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect back with a success message
        return back()->with('status', 'Password changed successfully.');
    }


}
