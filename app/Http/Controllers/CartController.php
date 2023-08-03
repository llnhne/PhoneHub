<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Sale;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


session_start();

class CartController extends Controller
{
    public function save_cart(Request $request) {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            session(['user_id' => $user_id]);
            $brands = Brand::all();
            $categories = Category::all();
            $id = $request->id_hidden;
            $quantity = $request->qty;
            $product_info = DB::table('products')
                ->where('id', $id)
                ->first();
    
            $data = [
                'id' => $product_info->id,
                'qty' => $quantity,
                'name' => $product_info->name,
                'price' => $product_info->price,
                'weight' => $product_info->price,
                'options' => [
                    'image' => $product_info->image,
                ],
            ];
    
            Cart::add($data);
            DB::table('carts')
                ->insert([
                    'sum_price' => $product_info->price * $quantity,
                    'user_id' => $user_id,
                    'product_id' => $product_info->id,
                    'quantity' => $quantity,
                ]);
            return Redirect::to('/show-cart');
        } else {
            return Redirect::to('/login');
        }
    }
    public function add_cart_ajax(Request $request){
        $data = $request->all();
        
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart == true){
            $is_avaiable = 0;
            foreach($cart as $val){
                if($val['id']==$data['id']){
                    $is_avaiable++;
                }
            }
            if($is_avaiable = 0){
                $cart[] = array(
                    'session_id' => $session_id,
                    'name' => $data['cart_name'],
                    'id' => $data['cart_id'],
                    'image' => $data['cart_image'],
                    'price' => $data['cart_price'],
                    'qty' => $data['cart_qty'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'name' => $data['cart_name'],
                'id' => $data['cart_id'],
                'image' => $data['cart_image'],
                'price' => $data['cart_price'],
                'qty' => $data['cart_qty'],
            );
            Session::put('cart',$cart);
        }
        Session::save();
    }
    public function show_cart(){
        
        $brands = Brand::all();
        $categories = Category::all();
        $sales = Sale::all();
        return view('cart.showcart',[
            'brands' => $brands,
            'categories' => $categories,
            'sales' => $sales
         
        ]);
    }
    public function update_cart(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->quantity;
        Cart::update($rowId,$qty);
        return Redirect::to('show-cart');
    }
    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('show-cart');
    }
}
