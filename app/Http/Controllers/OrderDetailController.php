<?php

namespace App\Http\Controllers;


use App\Mail\DetailEmail;
use App\Models\Bill;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderDetailController extends Controller
{
    public function index(Request $request,Bill $bill){
        $brands = Brand::all();
        $categories = Category::all();
        // dd($bill);
        // $data = $request->all();
        // $user_id = Auth::user()->id;
        // session(['user_id' => $user_id]);
        // $bill_name = substr(md5(rand()), 0, 2) . rand(100000, 999999);
        // $user_name = $_POST['user_name'];
        // $email = $_POST['email'];
        // $phone_number = $_POST['phone_number'];
        // $address = $_POST['address'];
        // $description = $_POST['description'];
        // $created_at = date('Y-m-d H:i:s');
        // $updated_at = date('Y-m-d H:i:s');
        // $vnp_Amount = $data['total_vnpay'] * 100;
        //  DB::table('bills')
        //     ->insert([
        //         'bill_name' => $bill_name,
        //         'user_name' => $user_name,
        //         'email' => $email,
        //         'phone_number' => $phone_number,
        //         'address' => $address,
        //         'sum_price' => $vnp_Amount / 100,
        //         'description' => $description,
        //         'user_id' => $user_id,
        //         'created_at' => $created_at,
        //         'updated_at' => $updated_at
        //     ]);
        // session()->forget('cart');  

        Mail::to("lelananh26012002@gmail.com")->send(new DetailEmail($bill));
        return view('order.orderdetail',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
