<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view("posts.index", compact("posts"));
    }

    public function create(Posts $posts) {
        return view("posts.create", compact("posts"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"]
          ]);
        Posts::create([
            "content" => $validated["content"],
          ]);
        return redirect("/posts");
    }
}
