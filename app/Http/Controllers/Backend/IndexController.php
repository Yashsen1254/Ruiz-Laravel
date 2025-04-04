<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $totalProduct = Product::count();
        $totalCategory = Category::count();
        $totalClient = Client::count();
        $totalOrder = Order::count();
        $totalRevenue = Order::sum('Totalamount');
        return view('backend.pages.index', compact('totalProduct', 'totalCategory', 'totalClient', 'totalOrder', 'totalRevenue'));
        // return view('backend.pages.index');
    }
}
