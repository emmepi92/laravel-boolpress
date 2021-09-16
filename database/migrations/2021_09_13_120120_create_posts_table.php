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
            $table->id();
            $table->char('title',150);
            $table->text('text_content');
            $table->char('author',255);
            $table->text ('img_path');
            $table->timestamps();
            //commenti forse ralazione 1 a molti
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
