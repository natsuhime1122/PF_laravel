<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index($id)
  {
    $user = User::find($id);
    $auth_id = Auth::id();
    $posts = Post::where('user_id', $id)
                    ->orderby('updated_at', 'desc')
                    ->paginate(10);
    return view('users.index', compact('user','auth_id','posts'));
  }

  public function profile()
  {
    $user = Auth::user();
    return view('users.profile', compact('user'));
  }

  public function edit(Request $request)
  {
    $user = Auth::user();
    // $this->authorize('view', $user);
    return view('users.edit', ['user' => $user ]);
  }
  
  public function update(Request $request, User $user)
  {
    $user = User::findOrFail($request->user_id);
    $rules = [
        'user_name' => ['required', 'string', 'max:30']
    ];
    $this->validate($request, $rules);
    $user->name = $request->user_name;
    $user->save();
    return redirect()->action('UserController@index', ['id' => $request->user_id]);
  }
}
