<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


  public function index(Request $request) {
    return view('posts.index', [ 'posts' => $posts ]);
  }

  public function create() {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $post = new Post();
    $post->content = $request->content;
    $post.save();
    return redirect('/posts/index');
  }

  public function update()
  {

  }

  public function edit()
  {

  }

  public function destroy()
  {

  }
}
