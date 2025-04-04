<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('frontend.pages.login');
    }

    public function login(Request $request)
    {
        $client = Client::where('Email', $request->Email)->where('Password', $request->Password)->first();  // get use karna hai

        if ($client) {
            session(['Clientid' => $client->Id]);            
            return redirect()->route('front.index')->with('success', 'Login successful!');
        }
    }

    // Logout Function
    public function logout()
    {
        session()->flush();
        return redirect()->route('front.index')->with('success', 'Login successful!');
    }
}