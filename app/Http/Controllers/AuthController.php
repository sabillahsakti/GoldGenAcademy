<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('dashboard');
        }
        else{
            return view('login');
        }

    }
}
