<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index(Request $request, $modelName){
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->listingConfigs();
        $condition = [
            
        ];
        $records = $model::where($condition)->paginate(10);
        return view('admin.listing', [
            'user' => $adminUsers,
            'records' => $records,
            'configs' => $configs,
            'title' => $model->title
        ]);
    }
}
