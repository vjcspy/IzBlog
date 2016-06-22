<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIzblogPostTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create(
            'izblog_post',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('post_author');
                $table->dateTime('post_date');
                $table->longText('post_content');
                $table->longText('post_short_content');
                $table->text('post_title');
                $table->char('post_status', 20);
                $table->char('ping_status', 20);
                $table->char('post_password');
                $table->char('post_name');
                $table->char('post_type', 20);
                $table->integer('post_parent_id');
                $table->integer('comment_count');
                $table->timestamps();
                $table->index('id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('izblog_post');
    }

}
