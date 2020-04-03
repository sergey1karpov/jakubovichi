<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Mods\Calculate;

class MainController extends Controller
{
    public function index(Post $post) {
        $posts = Post::orderBy('id', 'desc')->simplePaginate(2);
        return view('index', compact('posts'));
    }

    public function about() {
        return view('about');
    }

    public function team() {
        return view('team');
    }

    public function contacts() {
        return view('contacts');
    }

    public function show($id) {
        $post = Post::find($id);
        return view('show', compact('post'));
    }

    public function calculate(Request $request) {
        $res = Calculate::calc($request);
        return view('convert', compact('res'));
    }

}
