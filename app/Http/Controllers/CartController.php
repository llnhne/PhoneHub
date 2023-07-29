<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
// use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
// use Cart;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{
    public function save_cart(Request $request){
        $brands = Brand::all();
        $categories = Category::all();
        $id = $request->id_hidden;
        $quantity = $request->qty;
        $product_info = DB::table('products')
        ->where('id', $id)
        ->first();

        $data['id'] = $product_info->id;
        $data['name'] = $product_info->name;
        $data['qty'] = $quantity;
        $data['price'] = $product_info->price;
        $data['weight'] = $product_info->price;
        $data['options']['image'] = $product_info->image;
        Cart::add($data);
        return Redirect::to('/show-cart');
    }
    public function show_cart(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('cart.showcart',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
