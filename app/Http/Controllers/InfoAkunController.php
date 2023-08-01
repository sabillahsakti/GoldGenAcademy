<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoAkunController extends Controller
{
    public function showAccountInfo()
    {
        $user = Auth::user();
        return view('account_info', compact('user'));
    }
}