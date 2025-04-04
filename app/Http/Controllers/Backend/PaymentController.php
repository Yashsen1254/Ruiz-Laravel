<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {
        $payments = Payment::join('Order', 'Payment.Orderid', '=', 'Order.Id')
                        ->join('Cart', 'Order.Cartid', '=', 'Cart.Id')
                        ->join('Client', 'Cart.Clientid', '=', 'Client.Id')
                        ->select('Payment.*', 'Client.Name as ClientName', 'Order.Totalamount')
                        ->get();
        return view('backend.pages.payment.index', compact('payments'));
    }
}
