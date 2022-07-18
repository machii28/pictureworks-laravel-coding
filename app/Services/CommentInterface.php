<?php

namespace App\Services;

use App\Models\User;

interface CommentInterface
{
    public function store(User $user, string $comment): User;
}
