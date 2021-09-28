<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->comment('post id');
            $table->string('email', 20)->comment('notification of post creation');
            $table->string('title', 30)->comment('post title');
            $table->mediumText('content')->comment('post content');
            $table->dateTime('created_at')->comment('post created time');
            $table->dateTime('updated_at')->comment('post updated time');
            $table->dateTime('deleted_at')->nullable()->comment('post deleted time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
