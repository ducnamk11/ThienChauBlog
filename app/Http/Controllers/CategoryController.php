<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        return response()->json([
            'categories' => $categories
        ], 200);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'cat_name' => 'required|min:2|max:50'
        ]);
        $category = New Category();
        $category->cat_name = $request->cat_name;
        $category->save();
    }
}
