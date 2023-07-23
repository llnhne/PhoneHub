<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Chip;
use App\Models\Color;
use App\Models\Product;
use App\Models\Ram;
use App\Models\Rom;
use App\Models\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditingController extends Controller
{
    public function create(Request $request, $modelName){
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->editingConfigs();
        $brands = Brand::all();
        $products = Product::all();
        $categories = Category::all();
        $colors = Color::all();
        $rams = Ram::all();
        $roms = Rom::all();
        $chips = Chip::all();
        $screens = Screen::all();
        return view('admin.editing',[
            'user' => $adminUsers,
            'modelName' => $modelName,
            'titlecreate' => $model->titlecreate,
            'configs' => $configs,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories,
            'colors' => $colors,
            'rams' => $rams,
            'roms' => $roms,
            'chips' => $chips,
            'screens' => $screens
        ]);
    }
    public function store(Request $request, $modelName){
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->editingConfigs();
        $arrayValidateFields = [];
        $brands = Brand::all();
        $products = Product::all();
        $categories = Category::all();
        $colors = Color::all();
        $rams = Ram::all();
        $roms = Rom::all();
        $chips = Chip::all();
        $screens = Screen::all();
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
                                'public/images', $name
                            );
                            $model->{$config['field']} = '/' . str_replace("public/images", "storage/images", $path);
                        }
                    break;
                    case "images":
                        if ($request->hasFile($config['field'])) {
                            $images = $request->file($config['field']);
                            $imagePaths = [];
                            
                            foreach ($images as $i => $image) {
                                $name = $image->getClientOriginalName();
                                $path = $image->storeAs('public/images', $name);
                                $imagePaths[] = '/' . str_replace("public/images", "storage/images", $path);
                            }
                            
                            $model->{$config['field']} = json_encode($imagePaths);
                        }
                        break;
                    
                    default:
                    $model->{$config['field']} = $request->input($config['field']);
                    break;
                }
            }
        }
        return view('admin.editing',[
            'success' => $model->save(),
            'user' => $adminUsers,
            'modelName' => $modelName,
            'titlecreate' => $model->titlecreate,
            'configs' => $configs,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories,
            'colors' => $colors,
            'rams' => $rams,
            'roms' => $roms,
            'chips' => $chips,
            'screens' => $screens
        ]);
        
    }
}
