<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index(Request $request, $model){
        $adminUsers = Auth::guard('admin')->user();
        return view('admin.listing', ['user' => $adminUsers]);
    }
}
