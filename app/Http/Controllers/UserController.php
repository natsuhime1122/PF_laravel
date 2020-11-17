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

  public function edit() {

  }
}
