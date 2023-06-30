<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginPost(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.pages404');
        }
    }
    public function dashboard(){
        $adminUsers = Auth::guard('admin')->user();
        // dd($adminUsers);exit();
        return view('admin.dashboard', ['user' => $adminUsers]);
    }
    public function statistics(){
        $adminUsers = Auth::guard('admin')->user();
        // dd($adminUsers);exit();
        return view('admin.statistics', ['user' => $adminUsers]);
    }
    public function pages404(){
        return view('admin.pages404');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.loginPost');
    }
}
