<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIzblogViewTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create(
            'izblog_view',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->tinyInteger('share_layout');
                $table->tinyInteger('has_config');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('izblog_view');
    }

}
