<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

  public function top()
  {
    if (Auth::check()) {
      return redirect('/posts/index');
    }else{
      return view('top');
    }
  }

}
