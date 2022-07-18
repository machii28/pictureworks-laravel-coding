<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Services\CommentInterface;
use Illuminate\Console\Command;

class StoreCommentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add-comment {user} {comment}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add Comment Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(CommentInterface $commentService)
    {
        $user = User::find($this->argument('user'));

        $commentService->store($user, $this->argument('comment'));

        return 0;
    }
}
