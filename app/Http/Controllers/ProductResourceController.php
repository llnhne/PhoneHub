<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::get();
        return response()->json($product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $number_name = $request->input('number_name');
        
        $description = $request->input('description');
        $saleId = $request->input('sale_id');
        $brandId = $request->input('brand_id');
        $categoryId = $request->input('category_id');
        $colorId = $request->input('color_id');
        $ramId = $request->input('ram_id');
        $romId = $request->input('rom_id');
        $chipId = $request->input('chip_id');
        $screenId = $request->input('screen_id');

        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images', $image);

        // dd($request);

        $data =[
            'name' => $name,
            'price' => $price,
            'number_name' => $number_name,
            'image' => $image,
            'description' => $description,
            'sale_id' => $saleId,
            'brand_id' => $brandId,
            'category_id' => $categoryId,
            'color_id' => $colorId,
            'ram_id' => $ramId,
            'rom_id' => $romId,
            'chip_id' => $chipId,
            'screen_id' => $screenId
        ];
        
        $product = Product::create($data);
        return response()->json($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $number_name = $request->input('number_name');
        $image = $request->file('image');
        $description = $request->input('description');
        $saleID = $request->input('sale_id');
        $brandId = $request->input('brand_id');
        $categoryId = $request->input('category_id');
        $colorId = $request->input('color_id');
        $ramId = $request->input('ram_id');
        $romId = $request->input('rom_id');
        $chipId = $request->input('chip_id');
        $screenId = $request->input('screen_id');

        $data =[
            'name',
            'price',
            'number_name',
            'image',
            'description',
            'sale_id',
            'brand_id',
            'category_id',
            'color_id',
            'ram_id',
            'rom_id',
            'chip_id',
            'screen_id'
        ];

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json($product);
    }
}
