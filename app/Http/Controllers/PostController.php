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
    $posts = Post::all();
    return view('posts.index', [ 'posts' => $posts ]);
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

  public function edit()
  {
    $post = Post::all();
    return view('posts.edit');
  }

  public function update(Request $request)
  {
    return redirect('/posts/index');
  }

  public function destroy()
  {

  }
}
