<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id) {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::user()->id;
        $comment->author_name = Auth::user()->name;

        $comment->save();

        return redirect()->back();
    }
}


