<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleListHashtagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_list_hashtags', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('article_list_id')->unsigned()->index();

            $table->foreign('article_list_id')
                ->references('id')->on('article_lists')
                ->onDelete('cascade');

            $table->integer('hashtag_id')->unsigned()->index();

            $table->foreign('hashtag_id')
                ->references('id')->on('hashtags')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_list_hashtags');
    }
}
