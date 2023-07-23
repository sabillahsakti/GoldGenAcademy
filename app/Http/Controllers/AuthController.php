<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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

        return redirect()->route('login');
    }

     //nampilin login
     public function viewlogin(){
        return view('login');
    }
}
