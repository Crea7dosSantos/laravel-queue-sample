<?php

namespace App\Services;

use App\Jobs\SendPostCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostService
{
    /**
     * get post list
     *
     * @return Post $posts
     */
    public function getPosts()
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $posts = Post::all();
        return $posts;
    }

    /**
     * create post model
     *
     * @param Request $request
     * @return void
     */
    public function createPost(Request $request)
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $post = Post::create($request->all());

        SendPostCreatedMail::dispatch($post->email, $post->title);
    }
}
