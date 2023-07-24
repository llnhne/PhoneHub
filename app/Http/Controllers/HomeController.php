<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'asc')->take(4)->get();
        $sale = Product::orderBy('id', 'desc')->take(5)->get();
        $brands = Brand::all();
        $categories = Category::all();
        return view('user.index', [
            'products' => $products,
            'categories' => $categories,
            'sale' => $sale,
            'brands' => $brands
        ]);
    }

    public function category($id){
        $categories = Category::find($id);
        return view('user.headeruser',[
            'categories' => $categories
        ]);
        // return view('user.headeruser', compact('category'));
    }
    public function product(){
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::paginate(6);
        return view('user.product',[
            'brands' => $brands,
            'categories' => $categories,
            'products' => $products
        ]);
    }
    public function contact(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('user.contact',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
