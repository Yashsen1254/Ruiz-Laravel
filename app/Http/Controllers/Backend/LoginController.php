<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('backend.pages.login.index');
    }

    public function login(Request $request)
    {
        $Admin = Admin::where('Email', $request->Email)->where('Password', $request->Password)->first();  // get use karna hai

        if ($Admin) {
            session(['Adminid' => $Admin->Id]);            
            return redirect()->route('index')->with('success', 'Login successful!');
        }
    }

    public function logout() {
        session()->flush();
        return redirect()->route('admin.login');
    }
}
