<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
    $carts = Cart::where('Clientid', session('Clientid'))->get();
    $products = Product::whereIn('Id', $carts->pluck('Productid'))->get();
    return view('frontend.pages.checkout', compact('carts', 'products'));
    }

    public function store(Request $request) {

        $checkout = Checkout::create([
            'Name' => $request->Name,
            'Mobile' => $request->Mobile,
            'Email' => $request->Email,
            'Address' => $request->Address,
            'Cartid' => $request->Cartid,
        ]);

        $order = Order::create([
            'Totalquantity' => $request->Totalquantity,
            'Totalamount' => $request->Totalamount,
            'Status' => $request->Status,
            'Cartid' => $request->Cartid,
        ]);

        Cart::where('Id', $request->Cartid)->update([
            'isdeleted' => 1,
        ]);
        return redirect('/');
    }
}
