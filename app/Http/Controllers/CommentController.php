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
    public function edit(Comment $comment) {
        return view("comments/edit", compact("comment"));
    }

    public function update(Request $request, Comment $comment) {
        $validated = $request->validate([
            "comment" => ["required"]
        ]);
        $comment->comment = $validated["comment"];
        $comment->save();
        return redirect("/posts");;
    }
    
    public function destroy(Comment $comment) {
        $comment->delete();
        return redirect("/comment");
    }
}
