<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function show($id){
        $categories = Category::all();
        $brands = Brand::all();
        $sales = Sale::all();
        $brand_by_id = DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('products.brand_id', $id)
            ->get();
        $brand_name = DB::table('brands')
            ->where('brands.id', $id)
            ->limit(1)
            ->get();
        $product_by_id = DB::table('products')
            ->where('products.id', $id)
            ->limit(1)
            ->get();
        return view('user.showbrand',[
            'categories' => $categories,
            'brands' => $brands,
            'brand_by_id' => $brand_by_id,
            'sales' => $sales,
            'brand_name' => $brand_name,
            'product_by_id' => $product_by_id
        ]);
    }
}
