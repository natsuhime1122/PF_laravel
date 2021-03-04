<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function getPosts(){
    $posts = DB::select('SELECT u.id AS user_id
                              ,u.name AS user_name
                              ,p.id
                              ,p.content
                              ,p.updated_at
                        FROM posts AS p
                        INNER JOIN users AS u
                                ON p.user_id = u.id
                        ORDER BY p.updated_at DESC');
    return $posts;
  }
}
