<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index", compact("posts"));
    }

    public function show(Post $posts) {
        return view("posts.show", compact("posts"));
        
    }

    public function create(Post $posts) {
        $categories = Category::all();
        return view("posts.create", compact("posts", "categories"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "category_id" => ["required"]
          ]);
        Post::create([
            "content" => $validated["content"],
            "category_id" => $validated["category_id"]
          ]);
        return redirect("/posts");
    }
    public function edit(Post $posts) {
        return view("posts.edit", compact("posts"));
    }
    
    public function update(Request $request, Post $posts) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
          ]);
        $posts->content = $validated["content"];
        $posts->save();
        return redirect("/posts");
    }

    public function destroy(Post $posts) {
        $posts->delete();
        return redirect("/posts");
    }
}
