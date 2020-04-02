<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Post $post) {
        $posts = Post::all();
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

//    public function calculate(Request $request) {
//        $number = $request->number;
//        $res = round($number/1.68,2);
//        return view('calc', compact('res'));
//    }
}
