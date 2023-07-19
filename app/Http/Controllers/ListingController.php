<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index(Request $request, $modelName){
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
    public function destroy($modelName,Model $model)
    {
       
        $adminUsers = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->listingConfigs();
        $model->delete();
        return view('admin.listing', [
            'user' => $adminUsers,
            'configs' => $configs,
            'modelName' => $modelName,
            'model' => $model
        ]);
    }
}
