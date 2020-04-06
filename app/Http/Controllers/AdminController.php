<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('isAdmin');
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

    public function store(AddPostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->short_text = $request->short_text;
        $post->img_link = $request->img_link;
        $post->text = $request->text;
        $post->user_id = Auth::user()->id;

        if($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $post->img = $url;
        }

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

    public function update(AddPostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->short_text = $request->short_text;
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
