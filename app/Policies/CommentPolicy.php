<?php

namespace App\Policies;

use App\Comment;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CommentPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Comment $comment)
    {
        return $comment->user_id == $user->id;
    }

    public function update(User $user, Comment $comment)
    {
        return $comment->user_id == $user->id;
    }
}
