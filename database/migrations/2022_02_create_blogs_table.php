<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('blog_category_id')->nullable()->constrained('blog_categories')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->string('blog_image');
            $table->text('description');
            $table->longText('body')->nullable();
            //author information
            $table->string('author_name');
            $table->string('author_email');
            $table->string('author_image')->nullable();
            $table->string('author_description')->nullable();
            //meta keyword
            $table->text('meta_keyword');
            $table->string('meta_description');
            $table->string('status')->default('Publish');
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
        Schema::dropIfExists('blogs');
    }
};
