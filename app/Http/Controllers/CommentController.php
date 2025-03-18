<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Comment $comment) {
        return view("comment.create", compact("comment"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => ["required", "max:50"],
            "comment" => ["required"],
            "post_id" => ["required"]
        ]);
        Comment::create([
            "name" => $validated["name"],
            "comment" => $validated["comment"],
            "post_id" => $validated["post_id"],
        ]);
        return redirect("/posts/" . $validated["post_id"]);
    }
}
