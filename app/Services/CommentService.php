<?php

namespace App\Services;

use App\Models\User;

class CommentService implements CommentInterface
{
    public function store(User $user, string $comment): User
    {
        $user->comment = $user->comment . ' ' . $comment;
        $user->save();

        return $user;
    }
}
