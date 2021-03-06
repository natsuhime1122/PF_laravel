<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePost;
use Illuminate\Support\Facades\DB;
use App\Post;//モデル
use App\User;
use App\Comment;

class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }



  public function index() {
    $posts = Post::latest()->paginate(10);// SELECT * FROM posts ORDER BY DESC LIMIT 10
    $user_id = Auth::id();//今ログインしているユーザー
    return view('posts.index', compact('posts','user_id'));
  }

  public function show($id) {
    $post = Post::findOrFail($id);
    $user_id = Auth::id();
    $comments = Comment::where('post_id', $id)
                          ->orderby('updated_at', 'desc')
                          ->paginate(10);
    $comment_count = Comment::where('post_id', $id)->count();
    return view('posts.show', compact('post','user_id','comments','comment_count'));
  }

  public function create() {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $rules = [
        'content' => ['required', 'string', 'max:512']
    ];
    $this->validate($request, $rules);
    $post = new Post();
    $post->user_id = Auth::id();
    $post->content = $request->content;
    $post->save();
    return redirect('/posts/index');
  }

  public function edit(Request $request)
  {
    $post = Post::findOrFail($request->id);
    $this->authorize('view', $post);
    return view('posts.edit', ['post' => $post ]);
  }

  public function update(Request $request, Post $post)
  {
    $post = Post::findOrFail($request->id);
    $rules = [
        'content' => ['required', 'string', 'max:512']
    ];
    $this->validate($request, $rules);
    $post->content = $request->content;
    $post->save();
    return redirect('/posts/index');
  }

  public function destroy(Request $request, Post $post)
  {
    $post = Post::findOrFail($request->id);
    if($request->ajax()) {
      $post->delete();
      return response()->json(['deleted' => true, 'post' => $post]);
    }
  }
}
