<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct() {
        return $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function create()
    {
        return view('admin.addPost');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->img = $request->img;
        $post->img_link = $request->img_link;
        $post->text = $request->text;
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.editPost', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->img = $request->img;
        $post->img_link = $request->img_link;
        $post->text = $request->text;

        $post->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('home.index');
    }
}
