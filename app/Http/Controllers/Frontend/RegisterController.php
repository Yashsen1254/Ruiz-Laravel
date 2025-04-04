<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('frontend.pages.register');
    }

    public function store(Request $request) {
        $request->validate([
            'Name' => 'required',
            'Username' =>'required',
            'Email' =>'required',
            'Password' => 'required',
        ]);

        Client::create([
            'Name' => $request->Name,
            'Username' => $request->Username,
            'Email' => $request->Email,
            'Password' => $request->Password
        ]);

        return redirect()->route('front.login')->with('success', 'Admin created successfully');
    }

}
