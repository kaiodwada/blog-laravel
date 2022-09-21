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
            $table->string('slug', 255);
            $table->string('author', 95)->nullable();
            $table->string('title', 200);
            $table->longText('content');
            $table->string('media', 255)->nullable();
            //$table->unsignedBigInteger('category_id');
            $table->integer('category_id');
            $table->boolean('status');
            $table->boolean('disapproved')->nullable();
            $table->string('why-failed', 255)->nullable();
            $table->string('version', 80);
            $table->mediumText('excerpt')->nullable();
            //$table->foreign('category_id')->references('id')->on('categories');
            //$table->foreign('author_id')->references('id')->on('categories');
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
        Schema::dropIfExists('posts');
    }
}
