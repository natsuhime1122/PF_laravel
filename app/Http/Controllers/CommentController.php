<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
  public function store(Request $request)
  {
    $user = Auth::user();
    $rules = [
        'content' => ['required', 'string', 'max:256']
    ];
    $this->validate($request, $rules);
    $comment = new Comment();
    $comment->user_id = Auth::id();
    $comment->content = $request->content;
    $comment->save();
    return redirect('/posts/index');
  }

  public function edit(Request $request)
  {
    $comment = Comment::findOrFail($request->id);
    $this->authorize('view', $comment);
    return view('posts.edit', ['comment' => $comment ]);
  }

  public function update(Request $request, Comment $comment)
  {
    $comment = Comment::findOrFail($request->id);
    $rules = [
        'content' => ['required', 'string', 'max:256']
    ];
    $this->validate($request, $rules);
    $comment->content = $request->content;
    $comment->save();
    return redirect('/posts/index');
  }

  public function destroy(Request $request, Comment $comment)
  {
    $comment = Comment::findOrFail($request->id);
    if($request->ajax()) {
      $comment->delete();
      return response()->json(['deleted' => true, 'comment' => $comment]);
    }
  }
}
