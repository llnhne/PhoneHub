<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditingController extends Controller
{
    public function create(Request $request, $modelName){
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->editingConfigs();
        return view('admin.editing',[
            'user' => $adminUsers,
            'modelName' => $modelName,
            'configs' => $configs
        ]);
    }
    public function store(Request $request, $modelName){
        $validated = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|min:5|max:12',
            'brand_id' => 'required',
            'category_id' => 'required',
            'ckeditor' => 'required|max:1000'
        ]);
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        return view('admin.editing',[
            'modelName' => $modelName
        ]);
    }
}
