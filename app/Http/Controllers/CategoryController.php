<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show($id){
        $categories = Category::all();
        $brands = Brand::all();
        $sales = Sale::all();
        $category_by_id = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.category_id', $id)
            ->get();
        $category_name = DB::table('categories')
            ->where('categories.id', $id)
            ->limit(1)
            ->get();
        return view('user.showcategory',[
            'categories' => $categories,
            'brands' => $brands,
            'category_by_id' => $category_by_id,
            'sales' => $sales,
            'category_name' => $category_name
        ]);
    }
}
