<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('backend.pages.product.index', compact('products'));
    }

    public function create() {
        $categories = Category::get();
        return view('backend.pages.product.create', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'Price' => 'required',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Categoryid' => 'required'
        ]);

        if ($request->hasFile('Image')) {
            $imageName = time().'.'.$request->Image->extension();
            $request->Image->move(public_path('uploads/products'), $imageName);
        } else {
            return back()->with('error', 'Please select an image');
        }

        $product = new Product();
        $product->Name = $request->Name;
        $product->Description = $request->Description;
        $product->Price = $request->Price;
        $product->Image = $imageName;
        $product->Categoryid = $request->Categoryid;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }

    public function edit(int $Id) {
        $categories = Category::get();
        $product = Product::findorFail($Id);
        return view('backend.pages.product.edit', compact('product','categories'));
    }

    public function update(Request $request, int $Id) {
        
        $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'Price' => 'required',
            'Categoryid' => 'required'
        ]);

        $product = Product::findOrFail($Id);
        $product->Name = $request->Name;
        $product->Description = $request->Description;
        $product->Price = $request->Price;
        $product->Categoryid = $request->Categoryid;

        if ($request->hasFile('Image')) {
            $imageName = time().'.'.$request->Image->extension();
            $request->Image->move(public_path('uploads/products'), $imageName);
            $product->Image = $imageName;
        }

        $product->save();

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    public function delete(int $Id) {
        Product::where('Id', $Id)->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
