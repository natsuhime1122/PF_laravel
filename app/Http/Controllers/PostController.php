<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


  public function index() {
    return view('posts.index');
  }

  public function new() {
    return view('posts.new');
  }

  public function create()
  {

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
