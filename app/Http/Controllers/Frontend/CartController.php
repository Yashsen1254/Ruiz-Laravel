<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::join('product', 'cart.Productid', '=', 'product.Id')
            ->select('cart.*', 'product.*')
            ->get();
        return view('frontend.pages.cart', compact('carts'));
    }

    public function addToCart(Request $request) {
        Cart::create([
            'Productid' => $request->Productid,
            'Clientid' => session('Clientid'),
            'Quantity' => $request->Quantity,
        ]);
        return redirect('/cart')->with('success', 'Product added to cart successfully!');
    }

    public function delete($id)
    {
        Cart::where('Id', $id)->delete();
        return redirect('/cart')->with('success', 'Product removed from cart successfully!');
    }
}
