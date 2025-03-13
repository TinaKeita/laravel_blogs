<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view("categories.index", compact("categories"));
    }

    public function show(Categories $categories) {
        return view("categories.show", compact("categories"));
    }

    public function create(Categories $categories) {
        return view("categories.create", compact("categories"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"]
          ]);
        Categories::create([
            "content" => $validated["content"],
          ]);
        return redirect("/categories");
    }

    public function edit(Categories $categories) {
        return view("categories.edit", compact("categories"));
    }
    
    public function update(Request $request, Categories $categories) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
          ]);
        $categories->content = $validated["content"];
        $categories->save();
        return redirect("/categories");
    }

    public function destroy(Categories $categories) {
        $categories->delete();
        return redirect("/categories");
    }
}
