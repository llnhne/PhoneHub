<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Chip;
use App\Models\Color;
use App\Models\Product;
use App\Models\Ram;
use App\Models\Rom;
use App\Models\Sale;
use App\Models\Screen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UpdatingController extends Controller
{
    public function edit($modelName, $modelId)
    {
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\' . ucfirst($modelName);
        $model = new $model;
        $items = $model::find($modelId);
        $configs = $model->updatingConfigs();
        $sales = Sale::all();
        $brands = Brand::all();
        $products = Product::all();
        $categories = Category::all();
        $banners = Banner::all();
        $colors = Color::all();
        $rams = Ram::all();
        $roms = Rom::all();
        $chips = Chip::all();
        $screens = Screen::all();
        return view('admin.updating', [
            'user' => $adminUsers,
            'modelName' => $modelName,
            'modelId' => $modelId,
            'titleupdate' => $model->titleupdate,
            'configs' => $configs,
            'sales' => $sales,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories,
            'colors' => $colors,
            'rams' => $rams,
            'roms' => $roms,
            'chips' => $chips,
            'screens' => $screens,
            'items' => $items,
            'banners' => $banners
        ]);
    }

    public function update(Request $request, $modelName, $modelId)
    {
        $adminUser = Auth::guard('admin')->user();
        $model = '\App\Models\\' . ucfirst($modelName);
        $model = new $model;
        $items = $model::findOrFail($modelId);
        $configs = $model->updatingConfigs();
        $arrayValidateFields = [];
        $sales = Sale::all();
        $brands = Brand::all();
        $products = Product::all();
        $banners = Banner::all();
        $categories = Category::all();
        $colors = Color::all();
        $rams = Ram::all();
        $roms = Rom::all();
        $chips = Chip::all();
        $screens = Screen::all();
        

        foreach ($configs as $config) {
            if (!empty($config['validate'])) {
                if ($config['type'] === 'image' && !$request->hasFile($config['field'])) {
                    continue; // Bỏ qua kiểm tra trường ảnh nếu không có ảnh mới được tải lên
                }
                $arrayValidateFields[$config['field']] = $config['validate'];
            }
        }

        $validated = $request->validate($arrayValidateFields);

        foreach ($configs as $config) {
            if (isset($config['updating']) && $config['updating'] == true) {
                switch ($config['type']) {
                    case "image":
                        if ($request->file($config['field']) !== null) {
                            $name = $request->file($config['field'])->getClientOriginalName();
                            $path = $request->file($config['field'])->storeAs('public/images', $name);
                            $newImagePath = '/storage/images/' . $name;
                    
                            // Xóa ảnh cũ chỉ khi có cập nhật ảnh mới
                            if ($items->{$config['field']} && Storage::exists($items->{$config['field']}) && $items->{$config['field']} !== $newImagePath) {
                                Storage::delete($items->{$config['field']});
                            }
                    
                            $items->{$config['field']} = $newImagePath;
                        }
                        break;

                    default:
                        $items->{$config['field']} = $request->input($config['field']);
                        break;
                }
            }
        }

        $success = $items->save();

        return view('admin.updating', [
            'user' => $adminUser,
            'success' => $success,
            'user' => $adminUser,
            'modelName' => $modelName,
            'titleupdate' => $items->titleupdate,
            'configs' => $configs,
            'sales' => $sales,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories,
            'colors' => $colors,
            'rams' => $rams,
            'roms' => $roms,
            'chips' => $chips,
            'screens' => $screens,
            'items' => $items,
            'banners' => $banners
        ]);
    }
}
