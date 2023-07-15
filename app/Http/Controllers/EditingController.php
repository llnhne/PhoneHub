<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditingController extends Controller
{
    public function create(Request $request, $modelName){
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->editingConfigs();
        $brands = Brands::all();
        $products = Products::all();
        $categories = Categories::all();
        return view('admin.editing',[
            'user' => $adminUsers,
            'modelName' => $modelName,
            'titlecreate' => $model->titlecreate,
            'configs' => $configs,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories
        ]);
    }
    public function store(Request $request, $modelName){
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->editingConfigs();
        $arrayValidateFields = [];
        $brands = Brands::all();
        $products = Products::all();
        $categories = Categories::all();
        foreach($configs as $config){
            if(!empty($config['validate'])){
                $arrayValidateFields[$config['field']] = $config['validate'];
            }
        }
        // dd($arrayValidateFields);exit();
        $validated = $request->validate($arrayValidateFields);

        foreach($configs as $config){
            if(!empty($config['editing']) && $config['editing'] == true){
                switch($config['type']){
                    case "image":
                        if($request->hasFile($config['field'])){
                            $name = $request->file($config['field'])->getClientOriginalName();
                            $path = $request->file($config['field'])->storeAs(
                                'public', $name
                            );
                            // $model->{$config['field']} = '/'.str_replace("public", "storage", $path);
                            $data[$config['field']] = '/'.str_replace("public", "storage", $path);
                        }
                    break;
                    
                    default:
                    // $model->{$config['field']} = $request->input($config['field']);
                    $data[$config['field']] = $request->input($config['field']);
                    break;
                }
            }
        }
        dd($data);exit();
        return view('admin.editing',[
            'success' => $model->save(),
            'user' => $adminUsers,
            'modelName' => $modelName,
            'titlecreate' => $model->titlecreate,
            'configs' => $configs,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories
        ]);
        
    }
}
