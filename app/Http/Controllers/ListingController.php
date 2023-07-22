<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Chip;
use App\Models\Ram;
use App\Models\Rom;
use App\Models\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ListingController extends Controller
{
    public function index(Request $request, $modelName)
    {
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->listingConfigs();
        $filterResult = $model->getFilter($request, $configs, $modelName);
        $orderBy = [
            'field' => 'id',
            'sort' => 'desc'
        ];
        if($request->input('sort')){
            $field = substr($request->input('sort'),0, strpos($request->input('sort'), "_"));
            $sort = substr($request->input('sort'), strpos($request->input('sort'), "_") + 1);
            $orderBy = [
                'field' => $field,
                'sort' => $sort
            ];
        }
        $records = $model->getRecords($filterResult['conditions'], $orderBy);
        return view('admin.listing', [
            'user' => $adminUsers,
            'records' => $records,
            'configs' => $filterResult['configs'],
            'modelName' => $modelName,
            'title' => $model->title,
            'orderBy' => $orderBy
        ]);
    }

    public function show($modelName, $id)
    {
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $items = $model::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $color = Ram::all();
        $rom = Rom::all();
        $chip = Chip::all();
        $screen = Screen::all();
        return view('admin.detail', [
            'user' => $adminUsers,
            'titledetail' => $items->titledetail,
            'configs' => $items->detailConfigs(),
            'modelName' => $modelName,
            'items' => $items,
            'brand' => $items->brand,
            'category' => $items->category,
            'color' => $items->color,
            'ram' => $items->rom,
            'rom' => $items->ram,
            'chip' => $items->chip,
            'screen' => $items->screen
        ]);
    }

    public function archive($modelName)
    {
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $items = $model::onlyTrashed()->get();

        return view('admin.archive',[
            'user' => $adminUsers,
            'modelName' => $modelName,
            'titlearchive' => $model->titlearchive,
            'items' => $items
        ]);
    }

    public function delete($modelName, $modelId)
    {
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        
        // if($modelId->trashed()){
        //     $modelId->forceDelete();
        //     return Redirect::back()->with('success', 'Delete successfully');
        // }

        
        $model::find($modelId)->delete();
        return Redirect::back()->with('success', 'Delete successfully');
    }

}
