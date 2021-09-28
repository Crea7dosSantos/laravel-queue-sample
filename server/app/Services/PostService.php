<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostService
{
    /**
     * get post list
     *
     * @return void
     */
    public function getPosts()
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');
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

        Post::create($request->all());
    }
}
