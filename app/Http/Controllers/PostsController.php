<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view("posts.index", compact("posts"));
    }

    public function show(Posts $posts) {
        $categories = Categories::all();
        return view("posts.show", compact("posts", "categories"));
        
    }

    public function create(Posts $posts) {
        $categories = Categories::all();
        return view("posts.create", compact("posts", "categories"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "category_id" => ["required"]
          ]);
        Posts::create([
            "content" => $validated["content"],
            "category_id" => $validated["category_id"]
          ]);
        return redirect("/posts");
    }
    public function edit(Posts $posts) {
        return view("posts.edit", compact("posts"));
    }
    
    public function update(Request $request, Posts $posts) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
          ]);
        $posts->content = $validated["content"];
        $posts->save();
        return redirect("/posts");
    }

    public function destroy(Posts $posts) {
        $posts->delete();
        return redirect("/posts");
    }
}
