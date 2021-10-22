<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;

    private $post_title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($post_title)
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $this->post_title = $post_title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('記事作成完了のお知らせ')
            ->with(['post_title' => $this->post_title])
            ->text('emails.post.created');
    }
}
