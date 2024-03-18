<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('category', [
            'categories' => Category::get(),

        ]);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|unique:categories|min:3|max:100'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::create($data);

        return back()->with('status', 'Category Added Successfully !');
    }
}
