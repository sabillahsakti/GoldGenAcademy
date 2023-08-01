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

}
