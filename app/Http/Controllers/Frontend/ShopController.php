<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('frontend.pages.shop', compact('products'));
    }

    public function show($id) {
        $products = Product::find($id);
        return view('frontend.pages.singleproduct', compact('products'));
    }
}
