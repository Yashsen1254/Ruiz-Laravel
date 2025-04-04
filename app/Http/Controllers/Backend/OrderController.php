<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::join('Cart', 'Order.Cartid', '=', 'Cart.Id')
                        ->join('Client', 'Cart.Clientid', '=', 'Client.Id')
                        ->join('Product', 'Cart.Productid', '=', 'Product.Id')
                        ->select('Order.*', 'Client.Name as ClientName', 'Product.Name as ProductName')
                        ->get();
        return view('backend.pages.order.index', compact('orders'));
    }
    
    public function update($id) {
        Order::where('id', $id)->update([
            'Status' => 'Delivered',
        ]);

        Payment::create([
            'Orderid' => $id,
        ]);

        return redirect('/admin/order'); 

    }
}