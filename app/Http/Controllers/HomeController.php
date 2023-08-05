<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->where('status','1')->take(1)->get();
        $sales = Sale::all();
        $products = Product::orderBy('id', 'asc')->take(4)->get();
        $sale = Product::orderBy('id', 'desc')->take(5)->get();
        $brands = Brand::all();
        $categories = Category::all();
        
        return view('user.index', [
        'products' => $products,
        'categories' => $categories,
        'sale' => $sale,
        'brands' => $brands,
        'sales' => $sales,
        'banners' =>$banners
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
        $sales = Sale::all();
        return view('user.product',[
            'brands' => $brands,
            'categories' => $categories,
            'products' => $products,
            'sales' => $sales
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
