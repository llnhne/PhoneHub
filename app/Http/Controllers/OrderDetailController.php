<?php

namespace App\Http\Controllers;

use App\Mail\DetailEmail;
use App\Models\Bill;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderDetailController extends Controller
{
    public function index(Bill $bill){
        $brands = Brand::all();
        $categories = Category::all();
        Mail::to("lelananh26012002@gmail.com")->send(new DetailEmail($bill));
        return view('order.orderdetail',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
