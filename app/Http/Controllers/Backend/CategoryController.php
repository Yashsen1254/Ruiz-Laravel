<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('backend.pages.category.index', compact('categories'));
    }

    public function create() {
        return view('backend.pages.category.create');  
    }

    public function store(Request $request) {
        $request->validate([
            'Name' => 'required',
        ]);

        Category::create([
            'Name' => $request->Name,
        ]);

        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    public function edit(int $id) {
        $category = Category::findorFail($id);
        return view('backend.pages.category.edit', compact('category'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'Name' => 'required',
        ]);
        Category::where('id', $id)->update([
            'Name' => $request->Name,
        ]);
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    public function delete(int $id) {
        Category::where('id', $id)->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}