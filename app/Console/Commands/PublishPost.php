<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Post;

class PublishPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'publish:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Daily Post';

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
     * @return mixed
     */
    public function handle()
    {
        $lastPost = Post::where('published',true)->count();
        $post = Post::find($lastPost + 1);
        $post->publish();

    }
}
