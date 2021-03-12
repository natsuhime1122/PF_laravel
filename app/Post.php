<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  /**
   * このコメントを所有するユーザーを取得
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  /**
   * ポストのコメントを取得
   */
  public function comments()
  {
    return $this->hasMany('App\Comment');
  }
}
