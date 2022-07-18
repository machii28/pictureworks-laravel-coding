<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\User;
use App\Services\CommentInterface;

class CommentController extends Controller
{
    public function index(User $user)
    {
        return view('user-comment')->with(['user' => $user]);
    }

    public function store(CommentInterface $commentService, User $user, StoreCommentRequest $request)
    {
        $comment = $commentService->store($user, $request->get('comment'));

        return response()->json($comment);
    }
}
