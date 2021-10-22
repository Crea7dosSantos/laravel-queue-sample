<?php

namespace App\Services;

use App\Mail\PostCreated;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

        $this->sendCreatedPostMail($post->email, $post->title);
    }

    /**
     * send created post mail
     *
     * @param [type] $email
     * @param [type] $post_title
     * @return void
     */
    private function sendCreatedPostMail($email, $post_title)
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        Log::debug('Started send mail process');

        Mail::to($email)->send(new PostCreated($post_title));

        Log::debug('Completed send mail process');
    }
}
