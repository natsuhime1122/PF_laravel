<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Post;

use App\User;

class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }



  public function index() {
    $posts = Post::latest()->get();
    $user_id = Auth::id();
    return view('posts.index', compact('posts','user_id'));
  }

  public function show(Request $request) {
    $post = Post::find($request->id);
    return view('posts.show', [ 'post' => $post ]);
  }

  public function create() {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $post = new Post();
    $post->user_id = Auth::id();
    $post->content = $request->content;
    $post->save();
    return redirect('/posts/index');

  }

  public function edit(Request $request)
  {
    $post = Post::find($request->id);
    return view('posts.edit', ['post' => $post ]);
  }

  public function update(Request $request, Post $post)
  {
    $post = Post::find($request->id);
    $post->content = $request->content;
    $post->save();
    return redirect('/posts/index');
  }

  public function destroy(Request $request, Post $post)
  {
    $post = Post::find($request->id);
    $post->delete();
    return redirect('/posts/index');
  }
}
