<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        $checkouts = Checkout::get();
        return view('backend.pages.checkout.index', compact('checkouts'));
    }
}
