<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $admins = Admin::get();
        return view('backend.pages.admin.index', compact('admins'));
    }

    public function create() {
        return view('backend.pages.admin.create');  
    }

    public function store(Request $request) {
        $request->validate([
            'Name' => 'required',
            'Username' =>'required',
            'Email' =>'required',
            'Password' => 'required',
        ]);

        Admin::create([
            'Name' => $request->Name,
            'Username' => $request->Username,
            'Email' => $request->Email,
            'Password' => $request->Password
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin created successfully');
    }



    public function edit(int $id) {
        $admin = Admin::findorFail($id);
        return view('backend.pages.admin.edit', compact('admin'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'Name' => 'required',
            'Username' =>'required',
            'Email' =>'required',
            'Password' => 'required',
        ]);
        Admin::where('id', $id)->update([
            'Name' => $request->Name,
            'Username' => $request->Username,
            'Email' => $request->Email,
            'Password' => $request->Password
        ]);
        return redirect()->route('admin.index')->with('success', 'Admin updated successfully');
    }

    public function delete(int $id) {
        Admin::where('id', $id)->delete();
        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully');
    }
}
