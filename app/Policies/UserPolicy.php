<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    // public function view(User $user, Auth $auth)
    // {
    //     $auth_id = Auth::id();
    //     return $user->id == $auth_id;
    // }

    public function update(User $user, Auth $auth)
    {
        $auth_id = Auth::id();
        return $user->id == $auth_id;
    }
}
