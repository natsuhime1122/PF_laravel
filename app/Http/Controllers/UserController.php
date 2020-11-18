<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(Request $request) {
    $user = Auth::user();
    return view('users.index', [ 'user' => $user ]);
  }

  // public function edit(Request $request) {
  //   $user = Auth::find($request->id);
  //   return view('users.edit', ['user' => $user ]);
  // }
  //
  // public function update(Request $request, User $user) {
  //   $post = Post::find($request->id);
  //   $rules = [
  //       'content' => ['required', 'string', 'max:140']
  //   ];
  //   $this->validate($request, $rules);
  //   $post->content = $request->content;
  //   $post->save();
  //   return redirect('/users/index');
  // }
}
