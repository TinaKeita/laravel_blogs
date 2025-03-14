<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("categories.index", compact("categories"));
    }

    public function show(Category $categories) {
        $posts = Post::all();
        return view("categories.show", compact("categories"));
    }

    public function create(Category $categories) {
        return view("categories.create", compact("categories"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"]
          ]);
        Category::create([
            "content" => $validated["content"],
          ]);
        return redirect("/categories");
    }

    public function edit(Category $categories) {
        return view("categories.edit", compact("categories"));
    }
    
    public function update(Request $request, Category $categories) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
          ]);
        $categories->content = $validated["content"];
        $categories->save();
        return redirect("/categories");
    }

    public function destroy(Category $categories) {
        $categories->delete();
        return redirect("/categories");
    }
}
