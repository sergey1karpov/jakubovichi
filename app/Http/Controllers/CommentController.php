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

    public function delete($id) {
            $comment = Comment::find($id);
            if(Auth::user()->id == $comment->user_id) {
                $comment->delete();
                return redirect()->back()->with('success', 'Комментарий удален');
            } return redirect()->back()->with('success', 'sosi');
    }
}


