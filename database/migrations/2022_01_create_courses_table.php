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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_category_id')->nullable()->constrained('course_categories');
            $table->string('course_name')->unique();
            $table->string('slug');
            $table->string('course_image')->nullable();
            $table->longText('course_detail');
            $table->longText('body');
            $table->integer('strength');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('course_type');
            $table->double('price');
            $table->text('meta_keyword');
            $table->string('meta_description');
            $table->string('status')->default('Publish');
            $table->boolean('allow_enroll')->default(1);
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
        Schema::dropIfExists('courses');
    }
};
