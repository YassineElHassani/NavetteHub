<?php

namespace App\Policies;

use App\Models\Auth;
use App\Models\User;

class AuthPolicy
{

    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, Auth $auth): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Auth $auth): bool
    {
        return false;
    }

    public function delete(User $user, Auth $auth): bool
    {
        return false;
    }

    public function restore(User $user, Auth $auth): bool
    {
        return false;
    }

    public function forceDelete(User $user, Auth $auth): bool
    {
        return false;
    }
}
