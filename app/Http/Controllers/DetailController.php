<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function show(Request $request, $id)
{
    $products = Product::find($id);
    $categories = Category::all();
    $brands = Brand::all();
    $details_product = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->join('brands','brands.id', '=', 'products.brand_id')
        ->where('products.id',$id)->get();
    foreach($details_product as $value){
        $category_id = $value->category_id;
    }
    $related_product = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->join('brands','brands.id', '=', 'products.brand_id')
        ->where('categories.id',$category_id)
        ->whereNotIn('products.id',[$id])
        ->get();
    $products->load([
        'brand',
        'category',
        'sale'
    ]);

    if ($request->ajax()) {
        return view('user.detail', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ])->render();
    }

    return view('user.detail', [
        'products' => $products,
        'categories' => $categories,
        'brands' => $brands,
        'details_product' => $details_product,
        'related' => $related_product,
    ]);
}
    public function cateproduct($id){
        $products = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        $products->load([
            'brand',
            'category',
        ]);
        return view('user.cateproduct',[
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
}
